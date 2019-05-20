<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{

    protected $guared = ['id'];

    protected $date = [
    	'create_at',
    	'update_at',
    ];
    public $table = "news";
    
    public function comments()
    {
    	return $this->hasMany('App\Comment', 'news_id','id');
    }

    public function images()
    {
    	return $this->hasMany('App\Image', 'news_id','id');
    }
    public function categories()
    {
        return $this->belongsTo('App\Category','category_id','id');
    }
}
