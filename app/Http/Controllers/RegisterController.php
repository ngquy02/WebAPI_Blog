<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Sentinel;
use Redirect;

class RegisterController extends Controller
{
    //
    public function register(){
        return view('auth.register');
    }

    public function postRegister(Request $request){
        
        $credentials = [
            'email'    => $request->email,
            'password' => $request->password,
            'last_name' => $request->last_name,
            'first_name'=> $request-> first_name     
        ];

        $user = Sentinel::registerAndActivate($credentials);
        return Redirect::to('/login')
            ->withMessage('Thanks for registering!');
    }
}
