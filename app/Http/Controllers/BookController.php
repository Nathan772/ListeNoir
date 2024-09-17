<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookController extends Controller
{
    // créée par nathan
    public function index(){
        //récupère les livres et les affiches dans une vue
        //possibilité 2
        //return view('books/index');

        // récupère les données dans une vue
        /*
        renvoie un tableau
        qui possède la variable $books
        */

        //utilise le modèle
        $books = Book::all();
        
        return view('books.index', [
            'books' => $books
        ]);

    }
}

