<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController
{
    public function loginView(){
        return view('auth.login');
    }

    public function login(Request $request){
        $credentials = $request->validate([
            'email' => 'required|email:rfc,dns',
            'password' => 'required'
        ]);
        if(Auth::attempt($credentials)){
            $request->session()->regenerate();

            return redirect()->intended('/');
        }

        return back()->with([
            'gagal' => 'login gagal!'
        ]);
    }

}
