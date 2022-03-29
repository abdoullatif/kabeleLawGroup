<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use Illuminate\Http\Request;

class CategorieController extends Controller
{
    //
    public function index() {
        if( auth()->check() ){}
        else{
            return redirect("/")->withErrors('Session Deconnecter, Veuillez vous connecter');
        }
        //Get categorie in db
        $categories = Categories::orderBy('id')->get();

        return view('categorie.categorie', compact('categories'));
    }

    //
    public function formCategorie() {
        if( auth()->check() ){}
        else{
            return redirect("/")->withErrors('Session Deconnecter, Veuillez vous connecter');
        }
        return view('categorie.create-categorie');
    }

    //
    public function deleteCategorie($id) {
        if( auth()->check() ){}
        else{
            return redirect("/")->withErrors('Session Deconnecter, Veuillez vous connecter');
        }
        //Delete categorie
        $categorie = Categories::find($id)->delete();

        return redirect("view_categorie")->withErrors('Categorie supprimer !');
    }

    /**
     * Display a listing of the resource.
     *
     *@return \Illuminate\Http\Response
     */
    public function createCategorie(Request $request) {
        if( auth()->check() ){}
        else{
            return redirect("/")->withErrors('Session Deconnecter, Veuillez vous connecter');
        }
        //verification
        $request->validate([
            "nomCategorie"=>"required",
        ]);
        //Insert
        Categories::create([
            "nomCategorie"=>$request->nomCategorie,
        ]);

        return redirect("view_categorie")->withSuccess('Categorie enregistrer !');
        //return view('categorie.create-categorie');
    }

}
