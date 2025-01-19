<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ContactController;

//Pagina iniziale
Route::get('/', [PageController::class, 'welcome'])->name('welcome');


//Pagina degli articoli
Route::get('/articoli', [PageController::class, 'articoli'])->name("articoli");

//Pagina Del SINGOLO ARTICOLO
Route::get('/articolo/{id}', [PageController::class, 'articolo'])->name('articolo');

//Pagina CONTATTI
Route::get('/contatti',[ContactController::class, 'contatti'])-> name("contatti");

//Pagina Chi Siamo
Route::get('/chiSiamo', [PageController::class, 'ChiSiamo'])-> name("ChiSiamo");
