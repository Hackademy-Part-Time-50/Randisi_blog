<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdottiController extends Controller
{
    
    public function show(){

        return view("prodotti", [

            "title" => "Catalogo Prodotti",

        ]);
    }
}
