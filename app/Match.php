<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Match extends Model
{
    
    protected $guared = ['id'];
    protected $date = [
        'create_at',
        'update_at',
    ];
    public function matchTeam()
    {
        return $this->belongsTo('App\MatchTeam', 'match_team_id');
    }
    public function groups()
    {
        return $this->hasMany('App\Group', 'match_id');
    }
}
