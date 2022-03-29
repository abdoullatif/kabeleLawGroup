<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    //Index 
    public function indexState()
    {
        if( auth()->check() ){}
        else{
            return redirect("/")->withErrors('Session Deconnecter, Veuillez vous connecter');
        }
        //Get nomber of dossiers in db
        $dossiers = DB::table('dossiers')->count();
        //Get dossier resolus
        $dossiersResolus = DB::table('dossiers')->where('statutDossier', '=', 'Resolu')->count();
        //Get dossier non resolus
        $dossiersNonResolus = DB::table('dossiers')->where('statutDossier', '=', 'En cour')->count();
        //Get nomber of plaintes in db
        $plaintes = DB::table('plaintes')->count();
        //Get nomber of clients in db
        $clients = DB::table('clients')->count();
        //Get nomber of categories in db
        $categories = DB::table('categories')->count();
        //Get nomber of users in db
        $users = DB::table('users')->count();
        //Get credit in comptabilites in db
        $credit = DB::table('comptabilites')->where('typeOperationComptabilite', '=', 'Credit')->sum('montantComptabilite');
        //Get debit in comptabilites in db
        $debit = DB::table('comptabilites')->where('typeOperationComptabilite', '=', 'Debit')->sum('montantComptabilite');
        //Get solde in comptabilites in db
        $solde = $credit - $debit;
        //pourcentage de dossiers resolus
        $pourcentage = ($dossiersResolus * 100) / $dossiers;
        //pourcentage de dossiers non resolus
        $pourcentageNonResolus = ($dossiersNonResolus * 100) / $dossiers;

        return view('home.state', compact('dossiers', 'plaintes', 'clients', 'categories', 'users', 'credit', 'debit', 'solde', 'pourcentage', 'pourcentageNonResolus'));
    }

    //Home 
    public function indexHome()
    {
        if( auth()->check() ){}
        else{
            return redirect("/")->withErrors('Session Deconnecter, Veuillez vous connecter');
        }
        return view('home.home');
    }

}
