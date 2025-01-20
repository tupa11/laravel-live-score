<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $countries = [
            [
                'id' => Str::uuid(),
                'name' => 'Vietnam',
                'logo' => 'https://static.flashscore.com/res/_fs/build/vn.22020a7.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => Str::uuid(),
                'name' => 'England',
                'logo' => 'https://static.flashscore.com/res/_fs/build/en.e20b07c.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => Str::uuid(),
                'name' => 'Spanish',
                'logo' => 'https://static.flashscore.com/res/_fs/build/es.4dc0e44.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => Str::uuid(),
                'name' => 'Germany',
                'logo' => 'https://static.flashscore.com/res/_fs/build/de.ae030da.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => Str::uuid(),
                'name' => 'Italy',
                'logo' => 'https://static.flashscore.com/res/_fs/build/it.f6dbaba.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        DB::table('countries')->insert($countries);

        $competitions = [
            [
                'id' => Str::uuid(),
                'country_id' => $countries[0]['id'],
                'name' => 'V.League 1',
                'logo' => 'https://static.flashscore.com/res/image/data/jyRxC9WI-x6WuO9Om.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => Str::uuid(),
                'country_id' => $countries[1]['id'],
                'name' => 'Premier League',
                'logo' => 'https://static.flashscore.com/res/image/data/p4ukE697-UuZHx6Jq.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => Str::uuid(),
                'country_id' => $countries[2]['id'],
                'name' => 'La Liga',
                'logo' => 'https://static.flashscore.com/res/image/data/pMCgdchU-694TQr50.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => Str::uuid(),
                'country_id' => $countries[3]['id'],
                'name' => 'Bundesliga',
                'logo' => 'https://static.flashscore.com/res/image/data/d8I7BVRp-h6KPrxY6.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => Str::uuid(),
                'country_id' => $countries[4]['id'],
                'name' => 'Serie A',
                'logo' => '	https://static.flashscore.com/res/image/data/IeQvbykd-nNd4Czyb.png',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ];

        DB::table('competitions')->insert($competitions);

        $teams = [
            [
                'id' => Str::uuid(),
                'competition_id' => $competitions[0]['id'],
                'country_id' => $countries[0]['id'],
                'name' => 'Công An Hà Nội',
                'logo' => 'https://static.flashscore.com/res/image/data/CU93T5Fa-KnmSRxvE.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => Str::uuid(),
                'competition_id' => $competitions[0]['id'],
                'country_id' => $countries[0]['id'],
                'name' => 'Sông Lam Nghệ An',
                'logo' => 'https://static.flashscore.com/res/image/data/SjfvgTDa-EiT1Wpdd.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => Str::uuid(),
                'competition_id' => $competitions[1]['id'],
                'country_id' => $countries[1]['id'],
                'name' => 'Manchester United',
                'logo' => 'https://static.flashscore.com/res/image/data/nwSRlyWg-h2pPXz3k.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => Str::uuid(),
                'competition_id' => $competitions[1]['id'],
                'country_id' => $countries[1]['id'],
                'name' => 'Liverpool',
                'logo' => 'https://static.flashscore.com/res/image/data/Gr0cGteM-KCp4zq5F.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => Str::uuid(),
                'competition_id' => $competitions[1]['id'],
                'country_id' => $countries[1]['id'],
                'name' => 'Ipswich',
                'logo' => 'https://static.flashscore.com/res/image/data/zm5vbmDa-jXzj6iAf.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => Str::uuid(),
                'competition_id' => $competitions[1]['id'],
                'country_id' => $countries[1]['id'],
                'name' => 'Brighton',
                'logo' => 'https://static.flashscore.com/res/image/data/40juIezB-b92lfEJC.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => Str::uuid(),
                'competition_id' => $competitions[2]['id'],
                'country_id' => $countries[2]['id'],
                'name' => 'Real Madrid',
                'logo' => 'https://static.flashscore.com/res/image/data/A7kHoxZA-fcDVLdrL.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => Str::uuid(),
                'competition_id' => $competitions[2]['id'],
                'country_id' => $countries[2]['id'],
                'name' => 'Barcelona',
                'logo' => 'https://static.flashscore.com/res/image/data/8dhw5vxS-fcDVLdrL.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => Str::uuid(),
                'competition_id' => $competitions[1]['id'],
                'country_id' => $countries[1]['id'],
                'name' => 'Leicester',
                'logo' => 'https://static.flashscore.com/res/image/data/Em1CYqYg-UNZg5BP0.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => Str::uuid(),
                'competition_id' => $competitions[1]['id'],
                'country_id' => $countries[1]['id'],
                'name' => 'Fulham',
                'logo' => 'https://static.flashscore.com/res/image/data/naaAVOzB-ImMEe0UF.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => Str::uuid(),
                'competition_id' => $competitions[1]['id'],
                'country_id' => $countries[1]['id'],
                'name' => 'Arsenal',
                'logo' => 'https://static.flashscore.com/res/image/data/pfchdCg5-vcNAdtF9.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => Str::uuid(),
                'competition_id' => $competitions[1]['id'],
                'country_id' => $countries[1]['id'],
                'name' => 'Aston Villa',
                'logo' => 'https://static.flashscore.com/res/image/data/QsnteKXg-jwz95gs0.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        DB::table('teams')->insert($teams);

        // Seeder for matches
        $matches = [
            [
                'id' => Str::uuid(),
                'competition_id' => $competitions[0]['id'],
                'home_team_id' => $teams[0]['id'], // Công An Hà Nội
                'away_team_id' => $teams[1]['id'], // Sông Lam Nghệ An
                'status_id' => 1,  // Not started
                'match_time' => time() + 36000,
                'home_scores' => json_encode([0, 0, 0, 0, -1, 0, 0]),
                'away_scores' => json_encode([0, 0, 0, 0, -1, 0, 0]),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => Str::uuid(),
                'competition_id' => $competitions[1]['id'],
                'home_team_id' => $teams[2]['id'], // Manchester United
                'away_team_id' => $teams[3]['id'], // Liverpool
                'status_id' => 2,  // First half
                'match_time' => time() - 900, //starting 15 minutes ago
                'home_scores' => json_encode([1, 1, 0, 0, 4, 0, 0]),
                'away_scores' => json_encode([0, 0, 0, 0, 9, 0, 0]),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => Str::uuid(),
                'competition_id' => $competitions[2]['id'],
                'home_team_id' => $teams[6]['id'], // Real Madrid
                'away_team_id' => $teams[7]['id'], // Barcelona
                'status_id' => 4,  // Second half
                'match_time' => time() - 3600, //starting 60 minutes ago
                'home_scores' => json_encode([2, 0, 0, 0, 11, 0, 0]),
                'away_scores' => json_encode([1, 1, 0, 0, 3, 0, 0]),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => Str::uuid(),
                'competition_id' => $competitions[1]['id'],
                'home_team_id' => $teams[4]['id'], // Ipswich
                'away_team_id' => $teams[5]['id'], // Brighton
                'status_id' => 2,  // First half
                'match_time' => time() - 1800, //starting 30 minutes ago
                'home_scores' => json_encode([1, 1, 0, 0, -1, 0, 0]),
                'away_scores' => json_encode([0, 0, 0, 0, -1, 0, 0]),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => Str::uuid(),
                'competition_id' => $competitions[1]['id'],
                'home_team_id' => $teams[8]['id'], // Leicester
                'away_team_id' => $teams[9]['id'], // Fulham
                'status_id' => 8,  // Finished
                'match_time' => time() - 3600, //ending 60 minutes ago
                'home_scores' => json_encode([2, 2, 0, 0, 3, 0, 0]),
                'away_scores' => json_encode([1, 0, 0, 0, 2, 0, 0]),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => Str::uuid(),
                'competition_id' => $competitions[1]['id'],
                'home_team_id' => $teams[10]['id'], // Arsenal
                'away_team_id' => $teams[11]['id'], // Aston Villa
                'status_id' => 3,  // Halftime
                'match_time' => time() - 2700, //starting 45 minutes ago
                'home_scores' => json_encode([1, 1, 0, 0, 0, 0, 0]),
                'away_scores' => json_encode([0, 0, 0, 0, 1, 0, 0]),
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        DB::table('matches')->insert($matches);
    }
}
