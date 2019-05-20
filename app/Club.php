<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Club extends Model
{
    
    protected $guared = ['id'];

    protected $date = [
        'create_at',
        'update_at',
    ];
    protected $table = "clubs";
    public function ranks()
    {
        return $this->hasMany('App\Rank', 'clubs_id');
    }

}
