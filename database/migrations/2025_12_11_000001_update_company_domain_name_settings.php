<?php

declare(strict_types=1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        $fields = DB::table('custom_fields')
            ->where('code', 'domain_name')
            ->where('entity_type', 'company')
            ->get();

        foreach ($fields as $field) {
            $settings = json_decode($field->settings ?? '{}', true);

            $settings['allow_multiple'] = true;
            $settings['max_values'] = 5;
            $settings['unique_per_entity_type'] = true;

            DB::table('custom_fields')
                ->where('id', $field->id)
                ->update([
                    'code' => 'domains',
                    'name' => 'Domains',
                    'settings' => json_encode($settings),
                ]);
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        $fields = DB::table('custom_fields')
            ->where('code', 'domains')
            ->where('entity_type', 'company')
            ->get();

        foreach ($fields as $field) {
            $settings = json_decode($field->settings ?? '{}', true);

            unset(
                $settings['allow_multiple'],
                $settings['max_values'],
                $settings['unique_per_entity_type']
            );

            DB::table('custom_fields')
                ->where('id', $field->id)
                ->update([
                    'code' => 'domain_name',
                    'name' => 'Domain Name',
                    'settings' => empty($settings) ? null : json_encode($settings),
                ]);
        }
    }
};
