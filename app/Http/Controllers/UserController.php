<?php

namespace App\Http\Controllers;

use App\Models\person;
use App\Models\User;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    function registerlogic(Request $request) {
        $ReceivedRequst=$request->validate([
            'email'=>['required'],
            'password'=>['required','confirmed','min:2','max:15'],
            'first_name'=>['required'],
            'last_name'=>['required']
        ]);

        $user = User::where(['email'=>$ReceivedRequst['email']])->first();
        if($user){
            return redirect()->back()->withErrors(['message'=>'Email already exist']);
        }

        $user = new User;
        $user->fname=$ReceivedRequst['first_name'];
        $user->lname=$ReceivedRequst['last_name'];
        $user->email=$ReceivedRequst['email'];
        $user->password=$ReceivedRequst['password'];
        $user->save();

        return redirect('login')->with('message','Registration Successfull');

    }
    
    function logout(){
        Auth::logout();
        return redirect('login')->with('message', 'Logged out Successfully');
    }

}