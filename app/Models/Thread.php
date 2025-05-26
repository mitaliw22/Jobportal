<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Thread extends Model
{
    use SoftDeletes;
    
    public function Users(){
	    return $this->belongsToMany('App\Models\User');
    }
    
    public function Messages(){
	    return $this->hasMany('App\Models\Message', 'thread_id');
    }
    
    public function Job(){
	    return $this->belongsTo('App\Models\Job');
    }
}
