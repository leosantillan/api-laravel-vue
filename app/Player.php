<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Player extends Model
{
    use SoftDeletes;

    protected $table = 'players';

    protected $fillable = [
        'first_name', 'last_name', 'team_id'
    ];

    protected $hidden = [
        'deleted_at', 'created_at', 'updated_at'
    ];
}
