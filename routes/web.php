<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    
    return view('welcome', ["titolo" => "Vita Morte e Miracoli di PIPPO FRANCO"]);

})-> name("welcome");

Route::get('/articoli', function () {
    
    $articles = [

        ['id' => 1, 'title' => 'Articolo #1', 'category' => 'PHP', 'description' => 'Articolo di Prova 1'],
        ['id' => 2, 'title' => 'Articolo #2', 'category' => 'JS', 'description' => 'Articolo di Prova 2'],
        ['id' => 3, 'title' => 'Articolo #3', 'category' => 'Java', 'description' => 'Articolo di Prova 3'],
        ['id' => 4, 'title' => 'Articolo #4', 'category' => 'CSS', 'description' => 'Articolo di Prova 4'],

    ];
    
    return view('articoli', compact("articles"));

})-> name("Articoli");

Route::get('/articoli/{id}', function ($id) {
    
    $articles = [

        ['id' => 1, 'title' => 'Articolo #1', 'category' => 'PHP', 'description' => 'Articolo di Prova 1'],
        ['id' => 2, 'title' => 'Articolo #2', 'category' => 'JS', 'description' => 'Articolo di Prova 2'],
        ['id' => 3, 'title' => 'Articolo #3', 'category' => 'Java', 'description' => 'Articolo di Prova 3'],
        ['id' => 4, 'title' => 'Articolo #4', 'category' => 'CSS', 'description' => 'Articolo di Prova 4'],

    ];

    if(! array_key_exists($id, $articles)) {
        abort(404);
    }

    return view('articolo', [
        'title' => $articles[$id]['title'],
        'category' => $articles[$id]['category'],
    ]);
    

})-> name("Articolo");

Route::get('/contatti', function () {
    return view('contatti');
})-> name("Contatti");

Route::get('/chi-siamo', function () {
    return view('chi-siamo', [

        "chi_siamo" => "Chi Siamo",
        "descrizione" => "Descrizione Generica AboutUs"
    ]);
})-> name("Chi Siamo");

Route::get('/contatti', function () {
    
    return view('contatti');

})-> name("contatti");