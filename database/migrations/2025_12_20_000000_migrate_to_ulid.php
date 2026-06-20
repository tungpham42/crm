<?php

declare(strict_types=1);

use App\Models\Company;
use App\Models\Export;
use App\Models\Note;
use App\Models\Opportunity;
use App\Models\People;
use App\Models\Task;
use App\Models\Team;
use App\Models\User;
use Illuminate\Contracts\Database\Query\Builder;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Str;

return new class extends Migration
{
    private array $coreEntityTables = ['users', 'teams', 'companies', 'people', 'opportunities', 'tasks', 'notes'];
    private array $otherEntityTables = ['imports', 'exports', 'team_invitations', 'user_social_accounts', 'failed_import_rows', 'ai_summaries', 'system_administrators'];
    private array $customFieldTables = ['custom_fields', 'custom_field_sections', 'custom_field_options', 'custom_field_values'];
    private array $morphTypes = [
        'user' => 'users', 'team' => 'teams', 'company' => 'companies', 'people' => 'people',
        'opportunity' => 'opportunities', 'task' => 'tasks', 'note' => 'notes',
        'system_administrator' => 'system_administrators', 'import' => 'imports', 'export' => 'exports',
    ];

    /**
     * Run the migrations.
     */
    public function up(): void
    {
        set_time_limit(0);
        ini_set('memory_limit', '2048M');
        DB::disableQueryLog();

        if ($this->isAlreadyUlid('users', 'id')) {
            return;
        }

        $this->migrateForRelationalDb();
    }

    private function migrateForRelationalDb(): void
    {
        Schema::disableForeignKeyConstraints();

        // PHASE A
        $this->phaseA_addUlidToCoreTables();
        $this->phaseA_addForeignUlidsToCoreTablesAndPopulate();
        $this->phaseA_addUlidsToOtherEntityTables();
        $this->phaseA_addUlidsToPivotTables();
        $this->phaseA_addUlidsToPolymorphicTables();
        $this->phaseA_addUlidsToTenantScopedTables();
        $this->phaseA_addUlidsToCustomFieldTables();
        $this->phaseA7b_migrateOptionValueReferences();
        $this->phaseA8_migrateEmailFieldValues();
        $this->phaseA9_migrateDomainFieldValues();

        // PHASE B
        $this->phaseB_dropAllForeignKeyConstraints();
        $this->phaseB_cutoverCorePrimaryKeys();
        $this->phaseB_cutoverCoreForeignKeys();
        $this->phaseB_cutoverOtherEntityTables();
        $this->phaseB_cutoverPivotTables();
        $this->phaseB_cutoverPolymorphicTables();
        $this->phaseB_cutoverTenantScopedTables();
        $this->phaseB_cutoverCustomFieldTables();
        $this->phaseB_recreateUniqueIndexes();
        $this->phaseB9_recreateForeignKeyConstraints();

        Schema::enableForeignKeyConstraints();
    }

    // ... [Keep ALL of your original Phase A & Phase B private helper methods exactly as they are] ...

    private function isAlreadyUlid(string $table, string $column): bool
    {
        if (! Schema::hasTable($table) || ! Schema::hasColumn($table, $column)) {
            return false;
        }
        $columnType = Schema::getColumnType($table, $column);
        return in_array($columnType, ['string', 'char', 'varchar', 'bpchar', 'text'], true);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        throw new \RuntimeException('Reversing a ULID migration is structurally destructive and cannot be safely rolled back automatically since original integer IDs have been permanently lost. Please restore from a database backup if a rollback is required.');
    }
};
