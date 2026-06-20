<?php

declare(strict_types=1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('imports', function (Blueprint $table): void {
            $table->unsignedInteger('failed_rows')->default(0)->after('skipped_rows');
        });

        Schema::table('imports', function (Blueprint $table): void {
            $table->dropColumn([
                'file_path',
                'importer',
                'processed_rows',
                'successful_rows',
                'results',
                'failed_rows_data',
            ]);
        });
    }

    public function down(): void
    {
        Schema::table('imports', function (Blueprint $table): void {
            $table->dropColumn('failed_rows');
        });

        Schema::table('imports', function (Blueprint $table): void {
            $table->string('file_path')->nullable();
            $table->string('importer')->nullable();
            $table->unsignedInteger('processed_rows')->default(0);
            $table->unsignedInteger('successful_rows')->default(0);
            $table->json('results')->nullable();
            $table->json('failed_rows_data')->nullable();
        });
    }
};
