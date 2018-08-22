<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $filable = [
        'name',
        'description',        
        'user_id',             
   ];

   public function user(){
    return $this->belongsTo('App\User');

}

}
