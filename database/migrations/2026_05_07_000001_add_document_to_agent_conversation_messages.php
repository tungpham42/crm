<?php

declare(strict_types=1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (app()->environment('local', 'testing')) {
            // MySQL does not support TRUNCATE ... CASCADE.
            // We must temporarily disable foreign key checks to replicate the behavior.
            DB::statement('SET FOREIGN_KEY_CHECKS=0;');
            DB::statement('TRUNCATE TABLE agent_conversation_message_mentions;');
            DB::statement('TRUNCATE TABLE pending_actions;');
            DB::statement('TRUNCATE TABLE ai_credit_transactions;');
            DB::statement('TRUNCATE TABLE agent_conversation_messages;');
            DB::statement('TRUNCATE TABLE agent_conversations;');
            DB::statement('SET FOREIGN_KEY_CHECKS=1;');
        }

        Schema::table('agent_conversation_messages', function (Blueprint $table): void {
            // 1. Add the JSON column as nullable to bypass MySQL's default value restriction
            $table->json('document')->nullable();
        });

        // 2. Backfill existing records with the default JSON string
        DB::table('agent_conversation_messages')
            ->whereNull('document')
            ->update([
                'document' => '{"type":"doc","content":[]}'
            ]);
    }

    public function down(): void
    {
        Schema::table('agent_conversation_messages', function (Blueprint $table): void {
            $table->dropColumn('document');
        });
    }
};
