<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreArticleRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use App\Models\Article;

class ArticleController extends Controller
{
    public function index(){

        return view ("index", [
           "articles" => Article::all(),
        ]);
    }
    
    public function create(){
        return view ("articleform");
    }

    public function store(StoreArticleRequest $request){
        
        $articolo= Article::create($request->except("visible"));
        
        if($request->hasfile("image") && $request->file("image")->isValid()){

        $folder_name = 'articles/' . $articolo->id;
        
        $file_name = uniqid('image_') .'.' .$request->file('image')->extension();
            
        $file_path = $request->file('image')->storeAs($folder_name, $file_name, 'public');
        
        $articolo->image = $file_path;

        $articolo->save();

        
        }

        return redirect()->back()->with(['success' => 'Articolo creato correttamente.']);

    }

    public function edit(Article $article)
    {
        return view("articles.edit", [
            "article" => $article,
        ]);
        //Serve a mostrare l'indice di tutti gli Articoli
    }

    public function update(StoreArticleRequest $article, Request $request)
    {
        //Metodo 1
        //$article->title = $request->title;
        //$article->save();

        //Metodo 2(Usa Questo)

        $article->update($request->all());

        //return redirect()->back()->with ritorni nella stessa pagina

        return redirect()->route('index')->with(['success'=>'Articolo Aggiornato con Successo']);

        //Serve per Aggiornare/Modificare un'articolo
    }

    public function destroy(Article $article)
    {
        $article->delete();

        return redirect()->back()->with(['success'=>'Articolo Eliminato Correttamente.']);
    }
}
