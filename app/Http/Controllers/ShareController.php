<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ShareController extends Controller
{
    //
    public function index(){
        if( auth()->check() ){}
        else{
            return redirect("/")->withErrors('Session Deconnecter, Veuillez vous connecter');
        }
        //Get users in db
        $personnels = User::orderBy('id')->get();

        return view('share.share', compact('personnels'));
    }
}
