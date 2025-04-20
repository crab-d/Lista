<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;


class LoginController extends Controller
{

    // The request stored data from FORM 
    public function login(Request $request) {

        //Validated the request. email must not be empty (required) and valid (email)
        //Return and throw an error automatically if rules not satisfied
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
        
        //Auth::attempt if the credentials store exisits in DATABASE
        if (Auth::attempt($credentials)) {

            //If exists make new session and redirect to Dashboard, avoid fixation attack
            $request->session()->regenerate();
            return redirect()->intended('/UserDashboard');
        }

        //If no data from db return back to user with error
        return back()->withErrors([
            'email' => "invalid credentails",
        ])->withInput();

    }

    public function logout(Request $request) {

        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerate();

        return redirect('/');
    }
}
