<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    //
    public function index()
    {
        if( auth()->check() ){}
        else{
            return redirect("/")->withErrors('Session Deconnecter, Veuillez vous connecter');
        }
        //Get users in db
        $personnels = User::orderBy('id')->get();

        return view('personnels.users', compact('personnels'));
    }

    //Create user
    public function formUser()
    {
        if( auth()->check() ){}
        else{
            return redirect("/")->withErrors('Session Deconnecter, Veuillez vous connecter');
        }
        //
        return view('personnels.create-user');
    }

    //Create user
    /**
     * Display a listing of the resource.
     *
     *@return \Illuminate\Http\Response
     */
    public function createUser(Request $request)
    {
        if( auth()->check() ){}
        else{
            return redirect("/")->withErrors('Session Deconnecter, Veuillez vous connecter');
        }
        //verification
        $request->validate([
            "nom"=>"required",
            "prenom"=>"required",
            "sexe"=>"required",
            "adresse"=>"required",
            "telephone"=>"required",
            "email"=>"required|email|unique:users",
            "fonction"=>"required",
            "password"=>"required|min:6|confirmed",
            //"photo"=>"required",
        ]);

        //Image
        $name = "avatar.png";

        if($request->hasfile('photo')){
            //
            $name = time().rand(1,100).'.'.$request->file('photo')->extension();
            $request->file('photo')->move(public_path('uploads/Personnel/photo/'), $name);
        }

        //insert
        User::create([
            "nomPersonnel"=>$request->nom,
            "prenomPersonnel"=>$request->prenom,
            "sexePersonnel"=>$request->sexe,
            "telephonePersonnel"=>$request->telephone,
            "adressePersonnel"=>$request->adresse,
            "fonctionPersonnel"=>$request->fonction,
            "statutPersonnel"=> "AUTORISE",
            "privillegePersonnel"=> "USER",
            "dateInscriptionPersonnel"=> now(),
            "photoPersonnel"=> $name,
            "email"=>$request->email,
            "password"=>Hash::make($request->password),
        ]);

        //return view('personnels.create-user');
        return redirect("view_personnels")->withSuccess('Utilisateur enregistrer avec succes !');
    }

    //Profile update
    public function updateRegistration(Request $request)
    {
        if( auth()->check() ){}
        else{
            return redirect("/")->withErrors('Session Deconnecter, Veuillez vous connecter');
        }
        //
        $request->validate([
            'email' => 'email',
            'password' => 'min:6|confirmed',
        ]);


        $user = Auth::user();


        /*
            Ensure the user has entered a nom
        */
        if( $request->nomPersonnel != '' and $request->nomPersonnel != $user->nomPersonnel ){
            $user->nomPersonnel = $request->nomPersonnel;
        }

        /*
            Ensure the user has entered a prenom
        */
        if( $request->prenomPersonnel != '' and $request->prenomPersonnel != $user->prenomPersonnel ){
            $user->prenomPersonnel = $request->prenomPersonnel;
        }

        /*
            Ensure the user has entered a adresse
        */
        if( $request->sexePersonnel != '' and $request->sexePersonnel != $user->sexePersonnel ){
            $user->sexePersonnel = $request->sexePersonnel;
        }

        /*
            Ensure the user has entered a telephone
        */
        if( $request->telephonePersonnel != '' and $request->telephonePersonnel != $user->telephonePersonnel ){
            $user->telephonePersonnel = $request->telephonePersonnel;
        }

        /*
            Ensure the user has entered a adresse
        */
        if( $request->adressePersonnel != '' and $request->adressePersonnel != $user->adressePersonnel ){
            $user->adressePersonnel = $request->adressePersonnel;
        }

        /*
            Ensure the user has entered a email
        */
        if( $request->email != '' and $request->email != $user->email ){
            $user->email = $request->email;
        }

        /*
            Ensure the user has entered a password
        */
        if( $request->password != '' and $request->password != $user->password ){
            $user->password = Hash::make($request->password);
        }

        /*
            Ensure the user has entered a avatar
        */
        if( $request->hasfile('photoPersonnel') ){

            $name = time().rand(1,100).'.'.$request->file('photoPersonnel')->extension();
            $request->file('photoPersonnel')->move(public_path('uploads/personnel/photo/'), $name);

            $user->photoPersonnel = $name;
        }

        //Save
        $user->save();

        //auth
        auth()->login($user);

        //$check = $this->create($data);
        
        return back()->with("success", "Vos information on bien été modifiée");

    }

    

}
