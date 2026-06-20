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
        // Get all people emails custom fields that need updating
        $fields = DB::table('custom_fields')
            ->where('code', 'emails')
            ->where('entity_type', 'people')
            ->where('type', 'tags-input')
            ->get();

        foreach ($fields as $field) {
            $settings = json_decode($field->settings ?? '{}', true);

            // Set the new settings values
            $settings['allow_multiple'] = true;
            $settings['max_values'] = 5;
            $settings['unique_per_entity_type'] = true;

            DB::table('custom_fields')
                ->where('id', $field->id)
                ->update([
                    'type' => 'email',
                    'settings' => json_encode($settings),
                ]);
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Get all people emails custom fields that were updated to type 'email'
        $fields = DB::table('custom_fields')
            ->where('code', 'emails')
            ->where('entity_type', 'people')
            ->where('type', 'email')
            ->get();

        foreach ($fields as $field) {
            $settings = json_decode($field->settings ?? '{}', true);

            // Remove the added settings keys during rollback
            unset($settings['allow_multiple']);
            unset($settings['max_values']);
            unset($settings['unique_per_entity_type']);

            DB::table('custom_fields')
                ->where('id', $field->id)
                ->update([
                    'type' => 'tags-input',
                    'settings' => empty($settings) ? null : json_encode($settings),
                ]);
        }
    }
};
