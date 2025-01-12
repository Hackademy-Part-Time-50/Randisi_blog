<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/articoli', function () {
    return view('articoli');
});

Route::get('/contatti', function () {
    return view('contatti');
});

Route::get('/chi-simao', function () {
    return view('chi-siamo', [

        "chi_siamo" => "Chi Siamo",
        "descrizione" => "Descrizione Generica AboutUs"
    ]);
});