<?php

namespace App\Services;

use App\Constants\StatusMatch;
use App\Repositories\CompetitionsRepository;
use App\Repositories\CountryRepository;
use App\Repositories\MatchesRepository;
use App\Repositories\TeamsRepository;

class HomeService
{
    protected $teamsRepository;
    protected $matchesRepository;
    protected $countryRepository;
    protected $competitionsRepository;

    public function __construct(
        CountryRepository $countryRepository,
        TeamsRepository $teamsRepository,
        MatchesRepository $matchesRepository,
        CompetitionsRepository $competitionsRepository
    ) {
        $this->countryRepository = $countryRepository;
        $this->teamsRepository = $teamsRepository;
        $this->matchesRepository = $matchesRepository;
        $this->competitionsRepository = $competitionsRepository;
    }

    public function index($params)
    {
        $filter = $params['filter'] ?? 'all';

        $matches = $this->matchesRepository->getMatches($filter);
    
        $events = [];

        foreach ($matches as $k => $match) {
            $tournament = $match->competition;
            $events[$tournament->id]['country'] = $tournament->country->toArray();
            $events[$tournament->id]['tournament'] = $tournament->toArray();
            $events[$tournament->id]['matches'][] = [
                'match' => [
                    'status_id' => $match->status_id,
                    'match_time' => $match->match_time_to_date,
                    'hours_match_time' => $match->hours_match_time,
                    'status_match' => $this->getStatusMatch($match->status_id, $match->match_time)
                ],
                'home_team' => $match->homeTeam->toArray(),
                'home_scores' => [
                    'score_full_time' => $match->home_scores[0],
                    'score_half_time_1' => $match->home_scores[1],
                    'score_half_time_2' => $match->home_scores[0] - $match->home_scores[1],
                    'red_card' => $match->home_scores[2],
                    'yellow_card' => $match->home_scores[3],
                    'corner' => $match->home_scores[4] > 0 ? $match->home_scores[4] : 0,
                    'overtime' => $match->home_scores[5],
                    'penalty' => $match->home_scores[6]
                ],
                'away_team' => $match->awayTeam->toArray(),
                'away_scores' => [
                    'score_full_time' => $match->away_scores[0],
                    'score_half_time_1' => $match->away_scores[1],
                    'score_half_time_2' => $match->away_scores[0] - $match->away_scores[1],
                    'red_card' => $match->away_scores[2],
                    'yellow_card' => $match->away_scores[3],
                    'corner' => $match->away_scores[4] > 0 ? $match->away_scores[4] : 0,
                    'overtime' => $match->away_scores[5],
                    'penalty' => $match->away_scores[6]
                ],
            ];
        }

        return $events;
    }

    public function getStatusMatch($statusId, $matchTime)
    {
        $status = StatusMatch::STATUS[$statusId];
        if (in_array($statusId, [StatusMatch::FIRST_HALF, StatusMatch::SECOND_HALF])) {
            $currentTime = time();
            $matchStartTime = $matchTime;
            $elapsedTime = $currentTime - $matchStartTime;

            $status = strval(round($elapsedTime / 60) . "'");
        }
        return $status;
    }

    public function countMatches()
    {
        $countMatches = [
            'all' => $this->matchesRepository->countMatches(),
            'live' => $this->matchesRepository->countMatchesByStatus(StatusMatch::STATUS_LIVE),
            'end' => $this->matchesRepository->countMatchesByStatus([StatusMatch::FINISHED]),
            'schedule' => $this->matchesRepository->countMatchesByStatus([StatusMatch::NOT_STARTED]),
        ];

        return $countMatches;
    }
}
