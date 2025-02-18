<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;

class AnimeController extends Controller
{
    
    public const BASE_URL = "https://api.jikan.moe/v4";

    public function index()
    {
        //Gestione API
        $response= Http::get(self::BASE_URL. "/genres/anime")->json();

        dd($response);

        return view("anime.animeindex");
        //Continua da punto 30.44 - Laravel 16 API
    }



    public function animeByGenre($id)
    {

    }

}
