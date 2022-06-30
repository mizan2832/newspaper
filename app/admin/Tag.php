<?php

namespace App\admin;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $fillable = ['name'];


      public function categories()
    {
        return $this->belongsToMany(App\admin\Category::class, 'categories_tag');
    }

     public function news()
    {
        return $this->belongsToMany(App\admin\News::class, 'tagnews');
    }
}
