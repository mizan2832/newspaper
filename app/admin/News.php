<?php

namespace App\Admin;

use Illuminate\Database\Eloquent\Model;
use App\Comment;
class News extends Model
{
   // protected $fillable = ['parent_id']; 

    public function categories()
    {
        return $this->belongsToMany(Category::class, 'categoriesnews');
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class, 'tagnews');
    }

    public function user()
    {
        return $this->belongsTo(App\User::class);
    }

    public function comments()
    {
        return $this->morphMany(Comment::class, 'commentable')->whereNull('parent_id');
    }
}
