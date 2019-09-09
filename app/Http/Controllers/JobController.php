<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JobController extends Controller
{
    /**
     * Get  the Jobs Index view
     */
     public function index()
     {
       return view('jobs.index');
     }
    /**
     * Get  the Jobs Details view
     */
     public function show()
     {
       return view('jobs.show');
     }
}
