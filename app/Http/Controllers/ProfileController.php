<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    /**
     * Get the User Profile View
     */
     public function profile()
     {
       return view('profile');
     }
}
