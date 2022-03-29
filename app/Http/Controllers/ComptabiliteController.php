<?php

namespace App\Http\Controllers;

use App\Models\Dossiers;
use App\Models\Factures;
use Illuminate\Http\Request;
use App\Models\Comptabilites;
use Illuminate\Support\Facades\DB;

class ComptabiliteController extends Controller
{
    //
    public function index() {
        if( auth()->check() ){}
        else{
            return redirect("/")->withErrors('Session Deconnecter, Veuillez vous connecter');
        }
        //Get comptabilites,dossiers,plaintes,clients in db
        $comptabilites = DB::select('select 
        *,comptabilites.id as id,
        SUM(COALESCE(CASE WHEN typeOperationComptabilite="Credit" THEN montantComptabilite END,0)) Entrer,
        SUM(COALESCE(CASE WHEN typeOperationComptabilite="Debit" THEN montantComptabilite END,0)) Sortir,
        SUM(COALESCE(CASE WHEN typeOperationComptabilite="Credit" THEN montantComptabilite END,0))
        - SUM(COALESCE(CASE WHEN typeOperationComptabilite="Debit" THEN montantComptabilite END,0)) Solde
        from 
        comptabilites,dossiers,plaintes,clients
        where 
        comptabilites.dossiers_id = dossiers.id and 
        dossiers.plaintes_id = plaintes.id and 
        plaintes.clients_id = clients.id GROUP BY comptabilites.dossiers_id', []);

        return view('comptabilite.comptabilite', compact('comptabilites'));
    }

    //
    public function f_Comptabilite() {
        if( auth()->check() ){}
        else{
            return redirect("/")->withErrors('Session Deconnecter, Veuillez vous connecter');
        }
        //Get dossier in db
        $dossiers = Dossiers::orderBy('id')->get();

        return view('comptabilite.create-comptabilite', compact('dossiers'));
    }

    //
    public function j_Comptabilite($dossiers_id) {
        if( auth()->check() ){}
        else{
            return redirect("/")->withErrors('Session Deconnecter, Veuillez vous connecter');
        }
        //Get Comptabolites in db
        $comptabilites = Comptabilites::where('dossiers_id', '=', $dossiers_id)->get();
        //Get dossier in db
        $dossiers = Dossiers::find($dossiers_id);

        return view('comptabilite.journale-comptabilite', compact('comptabilites','dossiers'));
    }

    /**
     * Display a listing of the resource.
     *
     *@return \Illuminate\Http\Response
     */
    public function storeComptabilite(Request $request) {
        if( auth()->check() ){}
        else{
            return redirect("/")->withErrors('Session Deconnecter, Veuillez vous connecter');
        }
        //Verify if the request is valid
        $request->validate([
            'typeComptabilite' => 'required',
            'natureComptabilite' => 'required',
            'montantComptabilite' => 'required',
            //'commentaireComptabilite' => 'required',
            'dossiers_id' => 'required',
        ]);

        //Insert comptabilite in db
        $comptabilite = new Comptabilites();
        $comptabilite->typeOperationComptabilite = $request->typeComptabilite;
        $comptabilite->natureComptabilite = $request->natureComptabilite;
        $comptabilite->montantComptabilite = $request->montantComptabilite;
        //$comptabilite->commentaireComptabilite = $request->commentaireComptabilite;
        $comptabilite->DateComptabilite = now();
        $comptabilite->dossiers_id = $request->dossiers_id;
        $comptabilite->save();

        //si natureComptabilite create facture
        if(
            $request->natureComptabilite == "Montant Honoraire" or 
            $request->natureComptabilite == "Montant Premier Degre" or 
            $request->natureComptabilite == "Montant Deuxieme Degre" or 
            $request->natureComptabilite == "Montant Cour Supreme"
        ){
            //Insert facture in db
            $facture = new Factures();
            $facture->descriptionFacture = $request->natureComptabilite;
            $facture->dateFacture = now();
            $facture->montantFacture = $request->montantComptabilite;
            $facture->typeOperationFacture = $request->typeComptabilite;
            $facture->comptabilites_id = $comptabilite->id;
            $facture->save();
        }

        return redirect("v_comptabilite")->withSuccess('Operation enregistrer !');
        
    }

}
