<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Comment;
use App\User;

class Post extends Model
{
    protected $fillable = ['title' ,'body','user_id'];

    public function comment()
    {
    	return Post::hasMany(Comment::class);
    }

    public function user()
    {
    	return $this->belongsTO(User::class);
    }

    public function addComment($body)
    {
    	 $this->comment()->create(compact('body'));
    }
}
