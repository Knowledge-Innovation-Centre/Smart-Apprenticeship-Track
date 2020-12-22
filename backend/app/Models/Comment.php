<?php

namespace App\Models;

class Comment extends \Laravelista\Comments\Comment
{

    public $fillable = ['commenter_type', 'commenter_id','commentable_type', 'commentable_id','comment', 'approved', 'guest_name', 'guest_email'];
}
