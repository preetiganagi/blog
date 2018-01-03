<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Post;


class Comment extends Model
{
    
	 protected $fillable = ['post_id' ,'body','user_id'];

	public function user()
    {
    	return $this->belongsTO(User::class);
    }

    public function Post()
    {
    	return $this->belongsTO(Post::class);
    }
}
