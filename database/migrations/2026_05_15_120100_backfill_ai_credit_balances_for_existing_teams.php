<?php

declare(strict_types=1);

use App\Actions\Chat\SeedTeamCreditBalance;
use App\Models\Team;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    public function up(): void
    {
        $action = resolve(SeedTeamCreditBalance::class);

        Team::query()
            ->whereDoesntHave('aiCreditBalance')
            ->chunkById(200, function ($teams) use ($action): void {
                foreach ($teams as $team) {
                    $action->execute($team);
                }
            });
    }

    public function down(): void
    {
        // Data backfill logic generally has no automated "down" routine
        // to prevent accidentally destroying legitimate newly-seeded records.
    }
};
