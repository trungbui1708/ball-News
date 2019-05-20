<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tournament extends Model
{
	protected $guared = ['id'];
    protected $date = [
        'create_at',
        'update_at',
    ];
    public function ranks()
    {
        return $this->hasMany('App\Rank', 'tournament_id');
    }
    
}
