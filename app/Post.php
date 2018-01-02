<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Comment;

class Post extends Model
{
    protected $fillable = ['title' ,'body'];

    public function comment()
    {
    	return Post::hasMany(Comment::class);
    }
}
