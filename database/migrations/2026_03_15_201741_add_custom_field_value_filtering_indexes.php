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
        Schema::table('custom_field_values', function (Blueprint $table): void {
            $table->index(['custom_field_id', 'float_value'], 'cfv_field_float_idx');
            $table->index(['custom_field_id', 'date_value'], 'cfv_field_date_idx');
            $table->index(['custom_field_id', 'datetime_value'], 'cfv_field_datetime_idx');
            $table->index(['custom_field_id', 'integer_value'], 'cfv_field_integer_idx');
            $table->index(['custom_field_id', 'boolean_value'], 'cfv_field_boolean_idx');

            // MySQL requires a length limit when indexing TEXT columns.
            // Using DB::raw() allows us to set a safe 191-character prefix for utf8mb4.
            $table->index(['custom_field_id', DB::raw('string_value(191)')], 'cfv_field_string_idx');
        });
    }

    public function down(): void
    {
        Schema::table('custom_field_values', function (Blueprint $table): void {
            $table->dropIndex('cfv_field_float_idx');
            $table->dropIndex('cfv_field_date_idx');
            $table->dropIndex('cfv_field_datetime_idx');
            $table->dropIndex('cfv_field_string_idx');
            $table->dropIndex('cfv_field_integer_idx');
            $table->dropIndex('cfv_field_boolean_idx');
        });
    }
};
