<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreArticleRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use App\Models\Article;

class ArticleController extends Controller
{
    public function index(){

        return view ("articoli.index", [
           "articles" => Article::all(),
        ]);
    }
    
    public function  create(){
        return view ("articleform");
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

    public function update(Article $article)
    {
        return view("articles.update", [
            "article" => $article,
        ]);
    }

    public function edit(Article $article, Request $request)
    {
        //Metodo 1
        //$article->title = $request->title;
        //$article->save();

        //Metodo 2(Usa Questo)
        $article->update($request->all());
        //return redirect()->back()->with ritorni nella stessa pagina
        return redirect()->route('index')->with(['success'=>'Articolo Aggiornato con Successo']);
    }

    public function destroy(Article $article)
    {
        $article->delete();

        return redirect()->back()->with(['success'=>'Articolo Eliminato Correttamente.']);
    }
}
