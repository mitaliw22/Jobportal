<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Favourite extends Model
{
    public function User(){
	    return $this->belongsTo('App\Models\User');
    }
    
    public function Job(){
	    return $this->belongsTo('App\Models\Job');
    }
}
