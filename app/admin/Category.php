<?php

namespace App\admin;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['name','slug'];

     public function tags()
    {
        return $this->belongsToMany(App\admin\Tag::class, 'categories_tag');
    }

    public function news()
    {
        return $this->belongsTo(App\admin\News::class, 'categories_news');
    }
}
