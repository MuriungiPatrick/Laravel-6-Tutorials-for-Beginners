<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Job;

class JobController extends Controller
{
    /**
     * Get  the Jobs Homepage view
     */
     public function index()
     {
       $jobs = Job::all();
       return view('jobs.index', compact('jobs'));
     }
    /**
     * Get  the Jobs Details view
     */
     public function show()
     {
       return view('jobs.show');
     }
}
