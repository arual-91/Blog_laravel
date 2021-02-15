<?php

namespace App\Http\Controllers;



use App\Models\Book;

class BookController extends Controller
{
    public function index(){
        $menus = array("Inicio ", "Biografia", "Libros");
        $cabecera = "BLOG";
        $autor = "Christopher Paolini";

        $books = Book::all()->sortBy('order'); // sortByDesc 

        return view('books') 
        -> with('navs',  $menus )
        -> with('cabecera',  $cabecera ) 
        -> with('autor',  $autor ) 
        -> with('books',  $books );
    }

    public function show($id){
        $menus = array("Inicio ", "Biografia", "Libros");
        $cabecera = "BLOG";
        $autor = "Christopher Paolini";

       //$book = Book::where('id', $id)->first();  // $book = Books::find($id);  <-- metodo viene por defecto
        $book = Book::find($id);  // $book = Books::find($id);   <-- metodo viene por defecto

        return view('infoBook')
        -> with('navs',  $menus)
        -> with('cabecera',  $cabecera) 
        -> with('autor',  $autor) 
        -> with('book',   $book);
    }
}
