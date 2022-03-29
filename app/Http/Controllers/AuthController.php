<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    //
    public function index() {
        return view('login.login');
    }

    //
    public function customLogin(Request $request){

        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
   
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->intended('home')
                        ; //->withSuccess('Signed in')
        }
  
        return redirect("/")->withErrors('L\'adresse email ou le mot de passe est incorrecte');

    }

    //
    public function signOut() {
        //Deconnection
        Session::flush();
        Auth::logout();

        return view('login.login');
    }

}
