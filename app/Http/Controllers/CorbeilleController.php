<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CorbeilleController extends Controller
{
    //
    public function index($dossier_id){
        if( auth()->check() ){}
        else{
            return redirect("/")->withErrors('Session Deconnecter, Veuillez vous connecter');
        }
        //Get dossiers in db
        $dossiers = DB::table('dossiers')
        ->where('dossiers.id', '=', $dossier_id)
        ->join('plaintes', 'plaintes.id', '=', 'dossiers.Plaintes_id')
        ->join('clients', 'clients.id', '=', 'plaintes.clients_id')
        ->join('categories', 'categories.id', '=', 'dossiers.categories_id')
        ->join('users', 'users.id', '=', 'dossiers.users_id')
        ->join('comptabilites', 'dossiers.id', '=', 'comptabilites.dossiers_id')
        ->where('comptabilites.natureComptabilite', '=', 'Frais Inscription')
        ->get(['dossiers.id as id', 'dossiers.*', 'categories.*', 'clients.*', 'plaintes.*', 'users.*', 'comptabilites.*']);

        //Get pieces in db
        $pieces = DB::table('pieces')->where('dossiers_id', '=', $dossier_id)->get();

        return view('corbeille.corbeille', compact('dossiers', 'pieces'));
    }
}
