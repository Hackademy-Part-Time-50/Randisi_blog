<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreArticleRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use App\Models\Article;
use App\Models\Category;

class ArticleController extends Controller
{
    public function index(){

        

        return view ("index", [
           "articles" => Article::all()
        ]);
    }
    
    public function create(){
        return view ("articleform", [
            "categories" => Category::all()
        ]) ;
    }

    public function store(StoreArticleRequest $request){
        
        $article= Article::create($request->except("visible"));

        $article->categories()->attach($request->categories);
        
        if($request->hasfile("image") && $request->file("image")->isValid()){

        $folder_name = 'articles/' . $article->id;
        
        $file_name = uniqid('image_') .'.' .$request->file('image')->extension();
            
        $file_path = $request->file('image')->storeAs($folder_name, $file_name, 'public');
        
        $article->image = $file_path;

        $article->save();

        
        }

        return redirect()->route('index')->with(['success' => 'Articolo creato correttamente.']);

    }

    public function edit(Article $article)
    {
        return view("articles.edit", [
            "article" => $article,
            "categories" => Category::all()
        ]);
        //Creazione da Articles
    }

    public function update(Article $article, StoreArticleRequest $request)
    {
        //Metodo 1
        //$article->title = $request->title;
        //$article->save();

        //Metodo 2(Usa Questo)

        $article->update($request->all());
        Category::all();

        //return redirect()->back()->with ritorni nella stessa pagina

        $article->categories()->detach();
        $article->categories()->attach($request->categories);

        return redirect()->route('index')->with(['success'=>'Articolo Aggiornato con Successo']);

        //Serve per Aggiornare/Modificare un'articolo
    }

    public function destroy(Article $article)
    {
        $article->delete();

        return redirect()->back()->with(['success'=>'Articolo Eliminato Correttamente.']);
    }
}
