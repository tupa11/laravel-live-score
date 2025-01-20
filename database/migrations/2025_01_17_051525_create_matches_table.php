<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('matches', function (Blueprint $table) {
            $table->uuid('id')->primary()->default(DB::raw('(UUID())'));
            $table->uuid('competition_id');
            $table->uuid('home_team_id');
            $table->uuid('away_team_id');
            $table->unsignedTinyInteger('status_id')
                ->enum([1, 2, 3, 4, 5, 6, 7, 8, 9])
                ->comment('1: Not started, 2: First half, 3: Half time, 4: Second half, 5: Overtime, 6: Overtime(deprecated), 7: Penalty shootout, 8: End, 9: Delay');
            $table->unsignedBigInteger('match_time');
            $table->json('home_scores')->nullable();
            $table->json('away_scores')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('matches');
    }
};
