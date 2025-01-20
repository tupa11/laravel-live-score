<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teams extends Model
{
    use HasFactory;

    protected $table = 'teams';

    protected $primaryKey = 'id';

    public $incrementing = false;

    protected $keyType = 'string';

    protected $fillable = [
        'name',
        'logo',
        'country_id',
    ];

    protected $hidden = [
        'created_at',
        'updated_at'
    ];

    public function country()
    {
        return $this->belongsTo(Countries::class, 'country_id', 'id');
    }
}
