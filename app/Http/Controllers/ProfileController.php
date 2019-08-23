<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Session;

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
      * Update the Authenticated user profile
      */
      public function profileUpdate(Request $request)
      {
        //Validation Rules
        $request->validate([
          'name' => 'required|min:6|string|max:255',
          'email' => 'required|email|string|max:255'
        ]);
        //save the Profile update
        $user = Auth::user();
        $user->name = $request['name'];
        $user->email = $request['email'];
        $user->save();
        return back()->with('message', 'Profile Updated');;
      }
}
