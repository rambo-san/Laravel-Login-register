<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    function login(Request $request) {
        $cred = $request->validate([
            'email'=>'required|email',
            'password'=>'required'
        ]);
        if(Auth::attempt($cred)){
            return redirect('');
        }
        return redirect('login')->withErrors(['loginerror'=>'Invlalid Credentials']);

    }
}
