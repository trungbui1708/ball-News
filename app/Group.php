<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    protected $guared = ['id'];
    protected $date = [
        'create_at',
        'update_at',
    ];
    public function matches()
    {
        return $this->belongsTo('App\MatchTeam', 'match_team_id');
    }
}
