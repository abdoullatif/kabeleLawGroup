<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PdfViewnerController extends Controller
{
    //
    public function index() {
        if( auth()->check() ){}
        else{
            return redirect("/")->withErrors('Session Deconnecter, Veuillez vous connecter');
        }
        
        return view('pdfviewer.index');
    }
}
