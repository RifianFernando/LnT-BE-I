<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController
{
    public function registerView(){
        return view('auth.register');
    }

    public function register(RegisterRequest $request){
        $user = ([
            'email' => $request->email,
            'username' => $request->username,
            'password' => $request->password
        ]);
        // $user['password'] = bcrypt($user['password']);
        $user['password'] = Hash::make($user['password']);

        $user = User::create($user);

        $request->session()->flash('success', 'Berhasil Mendaftar silahkan login!');

        return redirect('/');
    }

}
