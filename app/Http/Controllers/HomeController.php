<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    function home(){
        return view('home');
    }
    function register(){
        return view('register');
    }
    function login(){
        return view('login');
    }
}
