<?php

declare(strict_types=1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('users', function (Blueprint $table): void {
            $table->timestamp('last_login_at')->nullable()->after('email_verified_at');
            $table->string('mailcoach_subscriber_uuid')->nullable()->after('remember_token');
            $table->string('subscriber_recency_bucket')->nullable()->after('mailcoach_subscriber_uuid');

            $table->index('mailcoach_subscriber_uuid');
        });
    }

    public function down(): void
    {
        Schema::table('users', function (Blueprint $table): void {
            $table->dropIndex(['mailcoach_subscriber_uuid']);
            $table->dropColumn([
                'last_login_at',
                'mailcoach_subscriber_uuid',
                'subscriber_recency_bucket'
            ]);
        });
    }
};
