<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ChangePasswordController extends Controller
{
    
    // Preventing un-logged in user to change password
    public function __construct(){
        $this->middleware('auth');
    }

    public function index(){
    	return view('auth.passwords.change');
    }

    public function changepassword(Request $request){

    	// Validation
    	$this->validate($request, [
    		'oldpassword' => 'required', // validating the current/old password
    		'password' => 'required | confirmed' // requesting the new password
    	]);

    	// Validating the current user
    	$hashedPassword = Auth::user()->password;
    	// Using condinonal if the password current user is matched with the hash password
    	if(Hash::check($request->oldpassword, $hashedPassword)){
    		// Use the User model to find the current (logged in) user in the db based on its id
    		$user = User::find(Auth::id());
    		// Insert/update the new password
    		$user->password = Hash::make($request->password);
    		// Save the new password
    		$user->save();
    		// Logout the user after updating its new password and redirect hit/her to login page
    		Auth::logout();
    		return redirect()->route('login')->with('successMsg', 'Password changed successfully!');
    	} else {
    		return redirect()->back()->with('errorMsg', 'Your current password is invalid!');
    	}

    }
}
