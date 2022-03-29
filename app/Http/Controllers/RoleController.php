<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    //
    public function index() {
        if( auth()->check() ){}
        else{
            return redirect("/")->withErrors('Session Deconnecter, Veuillez vous connecter');
        }
        //Get users in db
        $personnels = User::orderBy('id')->get();

        return view('role.role', compact('personnels'));
    }

    //
    public function updateRoleUser(Request $request) {
        //validate request
        $request->validate([
            "users_id"=>"required",
            "role"=>"required",
        ]);
        //verification if user exist
        $user = User::where('id', '=', $request->users_id)->first();
        if($user) {
            //update user role
            $user->privillegePersonnel = $request->role;
            $user->save();
            
        }
        //Get users in db
        $personnels = User::orderBy('id')->get();

        //return view('role.role', compact('personnels'));
        return redirect()->route('view_personnels')->with('success', 'Le rôle du personnel a été modifié avec succès');
    }

}
