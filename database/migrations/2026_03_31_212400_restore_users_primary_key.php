<?php

declare(strict_types=1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (! Schema::hasTable('users') || $this->usersHasPrimaryKey()) {
            return;
        }

        match (DB::getDriverName()) {
            'pgsql' => DB::statement('ALTER TABLE users ADD PRIMARY KEY (id)'),
            'mysql', 'mariadb' => DB::statement('ALTER TABLE `users` ADD PRIMARY KEY (`id`)'),
            default => null,
        };
    }

    private function usersHasPrimaryKey(): bool
    {
        return match (DB::getDriverName()) {
            'pgsql' => (bool) DB::selectOne(
                "SELECT 1 FROM pg_constraint WHERE conrelid = 'users'::regclass AND contype = 'p'"
            ),
            'mysql', 'mariadb' => (bool) DB::selectOne(
                'SELECT 1 FROM information_schema.table_constraints
                 WHERE table_schema = DATABASE() AND table_name = ? AND constraint_type = ?',
                ['users', 'PRIMARY KEY']
            ),
            default => true,
        };
    }

    public function down(): void
    {
        // Intentionally left blank.
        // Dropping the primary key here would corrupt the database and break structural integrity.
    }
};
