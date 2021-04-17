<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        //Validate
        $this->validate($request, [
            'email'=>'required',
            'password'=>'required',
        ]);
        //Sign in (If statement to avoid returning dashboard if login fails)
        if (!auth()->attempt($request->only('email','password'))){
            return back()->with('status', 'Email or Password Incorrect');
        }
        
        //Redirect
        return redirect()->route('dashboard');
    }
}
