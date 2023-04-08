<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth as Auth;
use Illuminate\Support\Str;

class LoginController extends Controller
{
    public function beranda()
    {
        return view('beranda');
    }
    public function login()
    {
        return view('login');
    }
    public function postlogin(Request $REQUEST)
    {
        $REQUEST->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        if (Auth::attempt($REQUEST->only('email','password'))){
            return redirect('/beranda');
        }
        return redirect('beranda');
    }
    public function logout(Request $REQUEST)
    {
        Auth::logout();
        return redirect(' ');
    }

}
