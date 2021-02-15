<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Biography;


class BiographyController extends Controller
{
    public function index(){
        $menus = array("Inicio ", "Biografia", "Libros");
        $cabecera = "BLOG";
        $autor = "Christopher Paolini";

        $articles = Biography::all()->sortBy('order'); // sortByDesc
      
        return view('biography') 
        -> with('navs',  $menus )
        -> with('cabecera',  $cabecera ) 
        -> with('autor',  $autor ) 
        -> with('articles',  $articles );
    }
}
