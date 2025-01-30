<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreArticleRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use App\Models\Article;

class ArticleController extends Controller
{
    public function  create(){
        return view ("articolocrea");
    }

    public function store(StoreArticleRequest $request){
        
        $articolo= Article::create($request->except("visible"));
        
        if($request->hasfile("image") && $request->file("image")->isValid()){

        
            
        //$imagePath = $request->file('image')->storeAs('cartella', $nomeFile, 'public');
        //da completare: Inserire variabile per salvare il nome file ed il folder
        //dare a nome file imagine uniqueid
        }

        return redirect()->back()->with(['success' => 'Articolo creato correttamente.']);

    }
}
