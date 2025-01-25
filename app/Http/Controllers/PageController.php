<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public $articles;

    public function __construct()
    {
        $this->articles = [

            ['id' => 1, 'title' => 'Articolo #1', 'category' => 'PHP', 'description' => 'Articolo di Prova 1', 'visible' => true],
            ['id' => 2, 'title' => 'Articolo #2', 'category' => 'JS', 'description' => 'Articolo di Prova 2', 'visible' => true],
            ['id' => 3, 'title' => 'Articolo #3', 'category' => 'Java', 'description' => 'Articolo di Prova 3', 'visible' => false],
            ['id' => 4, 'title' => 'Articolo #4', 'category' => 'CSS', 'description' => 'Articolo di Prova 4', 'visible' => true],
    
         ];
    }

    public function welcome() {

            return view('welcome', [
                "titolo" => "Vita Morte e Miracoli di PIPPO FRANCO",
            ]);        
    }
    public function articoli() {

        return view('articoli', [
            "articles" => $this->articles,
        ]);    
    }

    public function articolo($id) {

        if((! array_key_exists($id, $this->articles))){
            abort(404);
        }
    
        return view('articolo', [
            'title' => $this->articles[$id]['title'],
            'category' => $this->articles[$id]['category'],
        ]);
    }

    
    public function chisiamo(){

        return view("chiSiamo", [

            "chi_siamo" => "Chi Siamo",
            "descrizione" => "Descrizione Generica AboutUs"
        ]);
    }


}
