<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function create(){
        return view('login');
    }
    public function store(Request $request){

       $request->validate([
            'email'=> 'required|email',
            'password' => 'required',
        ]);

        $email = Auth::input('email');
        $password = Auth::input('password');

        if (Auth::attempt($email,$password)) {
            $request->session()->regenerate();
            return redirect('/dashboard')->with('success', 'Task was successful!');
        }

        return redirect('/login')->with('error','Invalid credentials. Check the email address and password entered');
            

    }
    public function logout(Request $request){
        Auth::logout();
        
        $request->session()->invalidate();
        $request->session()->regenerateToken(); 
        return redirect('/')->with('success','User logout');

    }
}
