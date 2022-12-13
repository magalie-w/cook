<?php

namespace App\Http\Controllers;

use App\Models\Recette;
use Illuminate\Http\Request;

class RecetteController extends Controller
{
    // public function index()
    // {
    //     return view('recette.index', [
    //         'recettes' => Recette::all(),
    //     ]);
    // }
    
    public function show($id)
    {
        return view('recette.show', [
            'recette' => Recette::findOrFail($id)  
        ]);
    }
}
