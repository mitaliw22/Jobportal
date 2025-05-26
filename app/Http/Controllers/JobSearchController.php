<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Job;

class JobSearchController extends Controller
{
    public function index(){
	    
	    $Jobs = Job::all();
	    
	    return view('jobsearch.index')->with('Jobs',$Jobs);
	    
    }
}
