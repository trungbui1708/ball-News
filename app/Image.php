<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Image extends Model
{
    
    protected $guared = ['id'];
    protected $date = [
        'create_at',
        'update_at',
    ];

    public $table = 'images';
    
    public function news()
    {
        return $this->belongsTo('App\News', 'news_id');
    }
}
