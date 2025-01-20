<?php

namespace App\Repositories;

use App\Models\Competitions;
use Illuminate\Support\Facades\DB;

class CompetitionsRepository extends BaseRepository
{
    protected $model = Competitions::class;

    public function getCompetitions()
    {
        return $this->query()->get();
    }

    public function getCompetitions1()
    {
        return $this->query()->select(DB::raw(
            'competitions.id,
            competitions.name, 
            competitions.logo, 
            ht.name as home_team, 
            ht.logo as home_team_logo,
            at.name as away_team, 
            at.logo as away_team_logo,
            m.status_id, 
            m.match_time,
            m.home_scores,
            m.away_scores,
            ct.name as country_name,
            ct.logo as country_logo
            '
        ))->leftJoin('matches as m', 'm.competition_id', '=', 'competitions.id')
            ->leftJoin('teams as ht', 'ht.id', '=', 'm.home_team_id')
            ->leftJoin('teams as at', 'at.id', '=', 'm.away_team_id')
            ->leftJoin('countries as ct', 'ct.id', '=', 'at.country_id')->get();
    }
}
