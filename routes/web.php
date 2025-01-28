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

//Pagina CONTATTI+Form
Route::get('/contatti',[ContactController::class, 'contatti'])-> name("contatti");

//Pagina Ricezione FORM CONTATTI 
Route::post('/contatti/send',[ContactController::class, 'send'])-> name("contatti.send");

//Pagina Chi Siamo
Route::get('/chiSiamo', [PageController::class, 'chisiamo'])-> name("chisiamo");

Route::get("/create_Model", [PageController::class, "create"]);
