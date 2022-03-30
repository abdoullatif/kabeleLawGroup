<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Clients;
use App\Models\Dossiers;
use App\Models\Factures;
use App\Models\Plaintes;
use App\Models\Categories;
use Illuminate\Http\Request;
use App\Models\Comptabilites;
use App\Models\Notifications;
use App\Notifications\AlertNotification;

class PlainteController extends Controller
{
    //
    public function index() {
        if( auth()->check() ){}
        else{
            return redirect("/")->withErrors('Session Deconnecter, Veuillez vous connecter');
        }
        //Get categorie and users in db
        $categories = Categories::orderBy('id')->get();
        $personnels = User::orderBy('id')->get();

        return view('plainte.create-plainte', compact('categories', 'personnels'));
    }

    /**
     * Display a listing of the resource.
     *
     *@return \Illuminate\Http\Response
     */
    public function storePlainte(Request $request) {
        if( auth()->check() ){}
        else{
            return redirect("/")->withErrors('Session Deconnecter, Veuillez vous connecter');
        }
        //
        $DG = User::where('fonctionPersonnel', '=', 'DG')->get();

        //
        $request->validate([
            "nom"=>"required",
            "prenom"=>"required",
            "sexe"=>"required",
            "etatCivile"=>"required",
            "adresse"=>"required",
            "raisonSociale"=>"required",
            "formeJuridique"=>"required",
            "siegeSocial"=>"required",
            "nationalite"=>"required",
            "profession"=>"required",
            "repreneurLegale"=>"required",
            "numero"=>"required",
            "telephone"=>"required",
            "emailClient"=>"required|email|unique:clients",
            "numeroRC5"=>"required",
            "jour1"=>"required",
            "mois1"=>"required",
            "annee1"=>"required",
            "jour2"=>"required",
            "mois2"=>"required",
            "annee2"=>"required",
            "naturePlainte"=>"required",
            "numeroDossier"=>"required",
            "referenceDossier"=>"required|unique:dossiers",
            "carpa"=>"required",
            "titreDossier"=>"required",
            "categorie"=>"required",
            "DescriptionPlainte"=>"required",
            "User"=>"required",
            "fraisInscription"=>"required",
            //"photoClient"=>"required",
        ]);

        //Variable
        $DateJuridiction = $request->jour1.'/'.$request->mois1.'/'.$request->annee1;
        $DateDeroulement = $request->jour2.'/'.$request->mois2.'/'.$request->annee2;
        $name = "avatar.png";


        //Verification image

        if($request->hasfile('photoClient'))
        {
            //Move to repositories with new name
            $name = time().rand(1,100).'.'.$request->file('photoClient')->extension();
            $file->move(public_path('uploads/'.$request->referenceDossier.'/'), $name);

        }

        //Insert db

        $client_id = Clients::create([
            "nomClient"=>$request->nom,
            "prenomClient"=>$request->prenom,
            "sexeClient"=>$request->sexe,
            "etatCivileClient"=>$request->etatCivile,
            "adresseClient"=>$request->adresse,
            "raisonSocialClient"=>$request->raisonSociale,
            "formeJuridiqueClient"=>$request->formeJuridique,
            "siegeSocialeClient"=>$request->siegeSocial,
            "nationaliteClient"=>$request->nationalite,
            "professionClient"=>$request->profession,
            "repreneurLegalClient"=>$request->repreneurLegale,
            "numeroClient"=>$request->numero,
            "telephoneClient"=>$request->telephone,
            "emailClient"=>$request->emailClient,
            "photoClient"=>$name,
            "numeroRC5Client"=>$request->numeroRC5,
            "dateJuridictionClient"=>$DateJuridiction,
            "dateDeroulementProcedureClient"=>$DateDeroulement,
        ]);

        $plainte_id = Plaintes::create([
            "naturePlainte"=>$request->naturePlainte,
            "datePlainte"=> now(),
            "descriptionsPlainte"=>$request->DescriptionPlainte,
            "clients_id"=>$client_id->id,
        ]);

        $dossier_id = Dossiers::create([
            "numeroDossier"=>$request->numeroDossier,
            "dateOuvertureDossier"=>now(),
            "carpaDossier"=>$request->carpa,
            "titreDossier"=>$request->titreDossier,
            "referenceDossier"=>$request->referenceDossier,
            "statutDossier"=> "En cour",
            "Plaintes_id"=>$plainte_id->id,
            "users_id"=>$request->User,
            "categories_id"=> $request->categorie,
        ]);

        $comptabilite_id = Comptabilites::create([
            "typeOperationComptabilite"=> "Credit",
            "natureComptabilite"=> "Frais Inscription",
            "montantComptabilite"=> (int) $request->fraisInscription,
            "DateComptabilite"=> now(),
            "dossiers_id"=> $dossier_id->id,
        ]);

        Factures::create([
            "descriptionFacture"=> "Paiement creation de dossier",
            "dateFacture"=> now(),
            "montantFacture"=> (int) $request->fraisInscription,
            "typeOperationFacture"=> "Credit",
            "comptabilites_id"=> $comptabilite_id->id,
        ]);

        //Notification Personnel
        $personnelCharger = User::find($request->User);

        //Notification DG
        $personnelChargerDG = User::where('fonctionPersonnel', '=', 'DG')->get();

        //Note
        $data = [
            'titre' => 'Nouvelle plainte',
            'titreDossier' => $request->titreDossier,
            'user' => $personnelCharger->nomPersonnel.' '.$personnelCharger->prenomPersonnel.' est charger du dossier',
            'date' => now(),
            'dossiers_id' => $dossier_id->id,
        ];

        //send notification
        $personnelCharger->notify(new AlertNotification($data));
        foreach ($personnelChargerDG as $personnelChargerDG) {
            $personnelChargerDG->notify(new AlertNotification($data));
        }
        //$personnelChargerDG->notify(new AlertNotification($data));

        /*
        $notification = new Notification();
        $notification->type = "Plainte";
        $notification->description = "Une nouvelle plainte a été créer";
        $notification->users_id = $request->User;
        $notification->save();*/



        /*
        Notifications::create([
            "statutNotification"=>"0",
            "dossiers_id"=>$dossier_id->id,
            "users_id"=>$request->User,
        ]);*/

        //Notification DG
        /*
        if ($DG->count() > 0) {
            foreach ($DG as $dg) {
                Notifications::create([
                    "statutNotification"=>"0",
                    "dossiers_id"=>$dossier_id->id,
                    "users_id"=>$dg->id,
                ]);
            }
        }*/
        
        /*
        Notifications::create([
            "statutNotification"=>"0",
            "dossiers_id"=>$dossier_id->id,
            "users_id"=>$DG[0]->id,
        ]);
        */


        return redirect("dossier")->withSuccess('La plainte a bien ete enregistrer !');

    }

}
