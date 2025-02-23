<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;

class AnimeController extends Controller
{
    
    public const BASE_URL = "https://api.jikan.moe/v4";

    public function index()
    {
        //Gestione API
        $response= Http::get(self::BASE_URL. "/genres/anime")->json();
        //Richiedo all'indirizzo BASE_URL, al sotto indirizzo dei dati che trasformo in file JSON.

        //dd($response);
        //Otteniamo un'array associativo "data"=>
        

        return view("anime.animeindex", ["response" => $response["data"],
        ]);
        
    }



    public function byGenre($id)
    {
        //Richiediamo dall'API i dati del sito
       $anime=Http::get(self::BASE_URL. "/anime?genres=". $id)->json();

       //Con Arr::map facciamo una scansione dell'array in richiesta
       $anime = Arr::map($anime["data"], function($item){
        return [
            
            //Decidiamo cosa ottenere dall'array dell'API
            "id"=> $item["mal_id"],
            "title"=> $item["title"],
            "type"=> $item["type"],
            "image"=> $item["images"]["jpg"]["image_url"],
        ];
       });

       
       return view("anime.byGenre",[
        "anime" => $anime,
        "genre" => $id,
       ]);

    }

    public function show($anime_id, $genre_id)
    {

        $anime=Http::get(self::BASE_URL. "/anime/". $anime_id)->json();
        
        return view("anime.show", [
            
            "anime"=> $anime["data"],
            "genre_id"=> $genre_id,
            
        ]);
    }

    public function apiArticles()
    {
        return Article::all();
        
        return $articles;
    }

}
