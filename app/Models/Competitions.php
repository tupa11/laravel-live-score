<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Competitions extends Model
{
    use HasFactory;

    protected $table = 'competitions';

    protected $primaryKey = 'id';

    public $incrementing = false;

    protected $keyType = 'string';

    protected $fillable = [
        'id',
        'name',
        'logo'
    ];

    protected $hidden = [
        'created_at',
        'updated_at'
    ];

    public function matches()
    {
        return $this->hasMany(Matches::class, 'competition_id', 'id');
    }

    public function country()
    {
        return $this->belongsTo(Countries::class, 'country_id', 'id');
    }
}
