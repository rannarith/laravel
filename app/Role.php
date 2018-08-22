<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $filable = [
        'name',
                
   ];

   
public function users(){
    return $this->hasMany('App\User');

}
}
