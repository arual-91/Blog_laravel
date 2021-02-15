<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;


class HomeController extends Controller
{
    public function index(){

        $menus = array("Inicio ", "Biografia", "Libros");
        $cabecera = "Blog";
        $autor = "Christopher Paolini";

        $articles = Article::all()->sortByDesc('created_at'); // sortByDesc sortBy
        
        return view('index') 
        -> with('navs',  $menus )
        -> with('cabecera',  $cabecera ) 
        -> with('autor',  $autor ) 
        -> with('articles',  $articles );
    }

    public function store(Request $request){

        $validated = $request->validate([
            'titulo' => 'required',
            'cuerpo' => 'required',
        ]);

        // The article is valid
        $article = new Article;
        $article->title = $request->input("titulo");
        $article->body = $request->input("cuerpo");
        $article->save();

        return $this->index();
    }

}
