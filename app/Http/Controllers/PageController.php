<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class PageController extends Controller
{
    
    public function welcome() {

            return view('welcome', [
                "titolo" => "Vita Morte e Miracoli di PIPPO FRANCO",
            ]);        
    }
    public function articoli() {

        return view('articoli', [
            "articles" => \App\Models\Article::all(),
        ]);    
    }

    public function articolo($id) {

        $article = \app\Models\Article::findOrFail($id);

        return view('articolo', [

            "article" => $article,
        ]);
            
    }

    
    public function chisiamo(){

        return view("chiSiamo", [

            "chi_siamo" => "Chi Siamo",
            "descrizione" => "Descrizione Generica AboutUs"
        ]);
    }

    public function create() {
        Article::create([

            "title" => "Articolo #4",
            "category" => "Sport",
            "description" => "Prova Articolo",
            "visible" => true,
            "body" => "Prova Body",

        ]);
    }

}
