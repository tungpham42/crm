<?php

declare(strict_types=1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('custom_field_options', function (Blueprint $table): void {
            $table->json('settings')->nullable()->after('sort_order');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        if (Schema::hasTable('custom_field_options') && Schema::hasColumn('custom_field_options', 'settings')) {
            Schema::table('custom_field_options', function (Blueprint $table): void {
                $table->dropColumn('settings');
            });
        }
    }

    /**
     * Determine if this migration should run.
     */
    public function shouldRun(): bool
    {
        return Schema::hasTable('custom_field_options') && ! Schema::hasColumn('custom_field_options', 'settings');
    }
};
