<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Team extends Model
{
    use SoftDeletes;

    protected $table = 'teams';

    protected $fillable = [
        'name'
    ];

    protected $hidden = [
        'deleted_at', 'created_at', 'updated_at'
    ];

    public function players()
    {
        return $this->hasMany('App\Player', 'team_id', 'id');
    }
}
