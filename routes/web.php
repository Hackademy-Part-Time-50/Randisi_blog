<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\CategoryController;

//Pagina iniziale
Route::get('/', [PageController::class, 'welcome'])->name('welcome');

//Pagina degli articoli
Route::get('/articoli', [PageController::class, 'articoli'])->name("articoli");

//Pagina Del SINGOLO ARTICOLO
Route::get('/articoli/{id}', [PageController::class, 'articolo'])->name('articolo');

//Pagina CONTATTI+Form
Route::get('/contatti',[ContactController::class, 'contatti'])-> name("contatti");

//Pagina Ricezione FORM CONTATTI 
Route::post('/contatti/send',[ContactController::class, 'send'])-> name("contatti.send");

//Pagina Chi Siamo
Route::get('/chiSiamo', [PageController::class, 'chisiamo'])-> name("chisiamo");

//Route::get("/create_Model", [PageController::class, "create"]);


//View Creazione Articolo
Route::get('/articleform',[ArticleController::class, 'create'])->name("articleform");
//Route::get('/account/articleform',[ArticleController::class, 'create'])->middleware('auth')->name("articleform");

//Ricezione Articolo in database
Route::post('/articleform/store',[ArticleController::class, 'store'])-> name("articleform.store");
//Route::post('/account/articleform/store',[ArticleController::class, 'store'])->middleware('auth')->name("articleform.store");

Route::middleware('auth')->prefix('account')->group(function(){

    //Route::get('/articleform',[ArticleController::class, 'create'])->middleware('auth')->name("articleform");
    
    //Route::post('/articleform/store',[ArticleController::class, 'store'])->middleware('auth')->name("articleform.store");
    //Rotta degli Account

    Route::get('/index', [ArticleController::class, "index"])->name("index");
    
    Route::get('/', [AccountController::class, 'dashboard'])->middleware('auth')->name("account.dashboard");
    
    Route::get('/articles/{article}/edit', [ArticleController::class, 'edit'])->middleware('auth')->name("articles.edit");

    Route::post('/articles/{article}/update', [ArticleController::class, 'update'])->middleware('auth')->name("articles.update");

    //Intercambiabile con PATCH; PUT RISCRIVE TUTTA LA RISORSA. PATCH solo alcune cose (il titolo)

    Route::delete('/articles/{article}/delete', [ArticleController::class, "destroy"])->middleware("auth")->name("articles.destroy");

    Route::resource('categories', CategoryController::class)->except('show');
    /*
    Route::resources([

        'articles' => ArticleController::class,
        'categories' => CategoryController::class,
    ]);
    In questa maniera, ciò scritto da riga 40 a 53 passa tutto su unica riga

    */
});
//Funzione per mettere + Rotte in protezione middleware('auth')
