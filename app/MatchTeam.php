<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MatchTeam extends Model
{
    
    protected $guared = ['id'];
    protected $date = [
        'create_at',
        'update_at',
    ];
    public function matches()
    {
        return $this->hasMany('App\MatchTeam', 'match_team_id');
    }
    public function clubs()
    {
        return $this->hasMany('App\Club', 'match_team_id');
    }
}
