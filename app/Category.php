<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $guared = ['id'];

    protected $date = [
        'create_at',
        'update_at',
    ];
    
    protected $table = "categories";
    public function news()
    {
        return $this->hasMany('App\News', 'category_id','id');
    }
}
