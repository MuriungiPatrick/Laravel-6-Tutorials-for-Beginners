<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class ProfileController extends Controller
{
    /**
     * Get the User Profile View
     */
     public function profile()
     {
       return view('profile');
     }
     /**
      * Update the Authenticate user profile
      */
      public function profileUpdate(Request $request)
      {
        //save the Profile update
        $user = Auth::user();
        $user->name = $request['name'];
        $user->email = $request['email'];
        $user->save();
        return back();
      }
}
