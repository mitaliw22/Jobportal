<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Job extends Model
{
	use SoftDeletes;
	
    public function user(){
	    return $this->belongsTo('App\Models\User');
    }
    
    public function Favourites(){
	    return $this->hasMany('App\Models\Favourite', 'job_id');
    }
    
    public function Threads(){
	    return $this->hasMany('App\Models\Thread', 'job_id');
    }
}
