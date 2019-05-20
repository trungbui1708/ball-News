<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{

    protected $guared = ['id'];
    protected $table = "comments";
    protected $date = [
        'create_at',
        'update_at',
    ];
    public function news()
    {
    	return $this->belongsto('App\News','news_id','id');
    }
}
