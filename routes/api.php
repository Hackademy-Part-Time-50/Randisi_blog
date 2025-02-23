<?php

use App\Http\Controllers\AnimeController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::get("/articles",[AnimeController::class, 'apiArticles'])->name("apidatabase");