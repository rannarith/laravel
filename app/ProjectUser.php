<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProjectUser extends Model
{
    protected $filable = [
        'project_id',
        'user_id',
               
   ];
}
