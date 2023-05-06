<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Sentinel;
use Redirect;

class LoginController extends Controller
{
    //
    public function login(){
        return view('auth.login');
    }
    
    public function postLogin(Request $request){
        Sentinel::authenticate($request->all());
        return Sentinel::check();
        
        $user = Sentinel::findById();

        Sentinel::login($user);
        dd('$user');
       
    }
}
