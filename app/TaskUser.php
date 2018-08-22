<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TaskUser extends Model
{
    protected $filable = [
        'task_id',       
        'user_id',
        
        
   ];
}
