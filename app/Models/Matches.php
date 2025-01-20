<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Matches extends Model
{
    use HasFactory;

    protected $table = 'matches';

    protected $primaryKey = 'id';

    public $incrementing = false;

    protected $keyType = 'string';

    protected $fillable = [
        'id',
        'competition_id',
        'home_team_id',
        'away_team_id',
        'home_team_score',
        'away_team_score',
        'status',
        'match_date',
        'created_at',
        'updated_at'
    ];

    protected $hidden = [
        'created_at',
        'updated_at'
    ];

    public function competition()
    {
        return $this->belongsTo(Competitions::class, 'competition_id', 'id');
    }

    public function homeTeam()
    {
        return $this->belongsTo(Teams::class, 'home_team_id', 'id');
    }

    public function awayTeam()
    {
        return $this->belongsTo(Teams::class, 'away_team_id', 'id');
    }

    public function getHomeScoresAttribute($value)
    {
        return json_decode($value, true);
    }

    public function getAwayScoresAttribute($value)
    {
        return json_decode($value, true);
    }

    public function getMatchTimeToDateAttribute($value)
    {
        return date('Y-m-d H:i:s', $value);
    }

    public function getHoursMatchTimeAttribute()
    {
        return $this->match_time ? date('H:i', $this->match_time) : null;
    }
}
