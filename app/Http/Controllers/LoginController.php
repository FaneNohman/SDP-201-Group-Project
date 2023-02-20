<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function log(){
        return view('auth.login');
    }
    public function login(Request $request){
        $credentials=$request->validate([
            'login'=>'required',
            'password'=>'required'
        ]);
        if(Auth::attempt($credentials)){
            $request->session()->regenerate();
            if(Auth::check()){
                return redirect()->route('main');
            }
        }
        return back()->withErrors([
           'login'=>'The provided credentials do not match our records.'
        ]);
    }
    public function logout(){
        Auth::logout();
        return redirect()->route('login');
    }
}
