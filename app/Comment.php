<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $filable = [
        'body',
        'url',
        'commentable_id',
        'commentable_type',
        'user_id',
        
   ];
}
