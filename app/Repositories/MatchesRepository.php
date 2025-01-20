<?php

namespace App\Repositories;

use App\Constants\StatusMatch;
use App\Models\Matches;

class MatchesRepository extends BaseRepository
{
    protected $model = Matches::class;

    public function getMatches($filter)
    {
        $matches = $this->model::query();

        if ($filter == 'live') {
            $matches->whereIn('status_id', StatusMatch::STATUS_LIVE);
        }

        if ($filter == 'end') {
            $matches->where('status_id', StatusMatch::FINISHED);
        }

        if ($filter == 'schedule') {
            $matches->where('status_id', StatusMatch::NOT_STARTED);
        }

        return $matches->get();
    }

    public function countMatches()
    {
        return $this->model::query()->count();
    }

    public function countMatchesByStatus($status)
    {
        return $this->model::query()->whereIn('status_id', $status)->count();
    }
}
