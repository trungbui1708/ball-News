<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rank extends Model
{
    protected $guared = ['id'];
    protected $date = [
        'create_at',
        'update_at',
    ];
    public function clubs()
    {
        return $this->belongsTo('App\Club', 'clubs_id');
    }
    public function tournaments()
    {
        return $this->belongsTo('App\Tournaments','tournament_id');
    }
}
