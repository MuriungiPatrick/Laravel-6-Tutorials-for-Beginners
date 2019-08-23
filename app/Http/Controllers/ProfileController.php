<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Session;
use Hash;

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
      /**
       * Get the Profile view for changing the password
       */
       public function changePasswordForm()
       {
         return view('changepassword');
       }
       /**
        * Change the password for the Authenticated user
        */
        public function changePassword(Request $request)
        {
          if(!(Hash::check($request->get('current_password'), Auth::user()->password))) {
            return back()->with('error', 'Your current password does not match with what you provided');
          }
          if(strcmp($request->get('current_password'), $request->get('new_password')) == 0) {
            return back()->with('error', 'Your current password cannot be same with the new password');
          }
          $request->validate([
            'current_password' => 'required',
            'new_password'     => 'required|string|min:6|confirmed'
          ]);
          $user = Auth::user();
          $user->password = bcrypt($request->get('new_password'));
          $user->save();
           return back()->with('message', 'Password changed successfully');
        }
}
