<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function addComment()
    {
        $comment = new Comment;

        $comment->post_id = $this->id;
        $comment->body = request('body');
        $comment->save();
    }
}
