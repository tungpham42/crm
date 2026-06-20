<?php

declare(strict_types=1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up(): void
    {
        $phoneFieldIds = DB::table('custom_fields')
            ->where('code', 'phone_number')
            ->where('type', 'text')
            ->pluck('id');

        if ($phoneFieldIds->isEmpty()) {
            return;
        }

        DB::table('custom_fields')
            ->whereIn('id', $phoneFieldIds)
            ->update(['type' => 'phone']);

        DB::table('custom_field_values')
            ->whereIn('custom_field_id', $phoneFieldIds)
            ->whereNotNull('text_value')
            ->whereNull('json_value')
            ->lazyById(100)
            ->each(function (object $row): void {
                DB::table('custom_field_values')
                    ->where('id', $row->id)
                    ->update([
                        'json_value' => json_encode([$row->text_value]),
                        'text_value' => null,
                    ]);
            });
    }

    public function down(): void
    {
        $phoneFieldIds = DB::table('custom_fields')
            ->where('code', 'phone_number')
            ->where('type', 'phone')
            ->pluck('id');

        if ($phoneFieldIds->isEmpty()) {
            return;
        }

        DB::table('custom_fields')
            ->whereIn('id', $phoneFieldIds)
            ->update(['type' => 'text']);

        DB::table('custom_field_values')
            ->whereIn('custom_field_id', $phoneFieldIds)
            ->whereNotNull('json_value')
            ->lazyById(100)
            ->each(function (object $row): void {
                $jsonArray = json_decode($row->json_value, true);
                $originalText = (is_array($jsonArray) && count($jsonArray) > 0) ? $jsonArray[0] : null;

                DB::table('custom_field_values')
                    ->where('id', $row->id)
                    ->update([
                        'text_value' => $originalText,
                        'json_value' => null,
                    ]);
            });
    }
};
