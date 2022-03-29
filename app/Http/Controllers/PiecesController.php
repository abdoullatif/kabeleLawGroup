<?php

namespace App\Http\Controllers;

use App\Models\Pieces;
use App\Models\Dossiers;
use Illuminate\Http\Request;

class PiecesController extends Controller
{
    //
    public function index() {
        if( auth()->check() ){}
        else{
            return redirect("/")->withErrors('Session Deconnecter, Veuillez vous connecter');
        }
        //Get dossier in db
        $dossiers = Dossiers::orderBy('id')->get();

        return view('piece.create-piece', compact('dossiers'));
    }

    //
    public function searchPieces($dossiers_id) {
        if( auth()->check() ){}
        else{
            return redirect("/")->withErrors('Session Deconnecter, Veuillez vous connecter');
        }
        //Get pieces in db with dossiers_id
        $pieces = Pieces::where('dossiers_id', '=', $dossiers_id)->get();
        //Get dossier in db find id
        $dossier = Dossiers::find($dossiers_id);

        return view('piece.search-piece', compact('pieces', 'dossier'));
    }

    //Store Piece in db
    public function storePieces(Request $request) {
        if( auth()->check() ){}
        else{
            return redirect("/")->withErrors('Session Deconnecter, Veuillez vous connecter');
        }
        //Verification
        $request->validate([
            "pieces.*"=>"required|unique:pieces",
            "dossiers_id"=>"required",
        ]);

        //Get dossier in db
        $dossier = Dossiers::find($request->dossiers_id);

        //move file to storage
        //$file->move(public_path('storage/pieces'), $fileName);

        //Move file to storage
        if($request->hasfile('pieces')){
            foreach($request->file('pieces') as $piece)
            {
                //$name = time().rand(1,100).'.'.$piece->extension();
                //$file = $request->file('pieces');
                $name = $piece->getClientOriginalName();
                $piece->move(public_path('uploads/'.$dossier->referenceDossier.'/'), $name);

                //insert piece in db
                $piece = new Pieces;
                $piece->nomPiece = $name;
                $piece->statutPiece = 'Active';
                $piece->datePiece = now();
                $piece->dossiers_id = $request->dossiers_id;

                $piece->save();

            }
            
        }

        //return view('piece.create-piece');
        return redirect("dossiers_managers/$request->dossiers_id")->withSuccess('Pieces enregistrer !');
    }

    //
    public function viewPieces($dossiers_id,$pieces_id) {
        if( auth()->check() ){}
        else{
            return redirect("/")->withErrors('Session Deconnecter, Veuillez vous connecter');
        }
        //Get Dossier in db
        $dossiers = Dossiers::find($dossiers_id);

        $reference = $dossiers->referenceDossier;

        //dd($reference);

        //Get Piece in db
        $pieces = Pieces::where('dossiers_id', '=', $dossiers_id)->get();

        //select piece
        $file = Pieces::find($pieces_id);
        
        return view('pdfviewner.pdfviewner', compact('reference','pieces','file'));
    }
}
