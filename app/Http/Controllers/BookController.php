<?php

namespace App\Http\Controllers;

//ajouté manuellement
use App\Models\Book;
//ajouté manuellement
use App\Models\User;

use Illuminate\Http\Request;

use App\Http\Resources\BookResource;

#use App\resources\js\reactJs\components\Indexes\BooksIndex;

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
    
        return view('books.index', [
            'books' => $books
        ]);

    }

    public function show(Book $book){

        return new BookResource($book);
    }


    // créée par nathan
    public function indexForReact(Request $request){
        // //récupère les livres et les affiches dans une vue
        // //possibilité 2
        // //return view('books/index');

        // // récupère les données dans une vue
        // /*
        // renvoie un tableau
        // qui possède la variable $books
        // */
        // // Get data here, eg. make an external API request or DB query
        

        //  // Return success

        // //return BooksIndex.render();
        // //return Book::all();
        
        // return response()->json(
        // [
        //   'status' => '200',
        //   'data' => BookResource::collection(Book::all()),
        //   'message' => 'success'
        // ],);
        return BookResource::collection(Book::all());

    }

    public function accueil(Request $request){
        //return redirect()->route('');
        //shoud be replaced by the actual 
        //homepage
        return view('index');
    }

    /*permet de créer la vue, le nouveau livre */
    public function create(){
        /*"view(books.create)" correspond au path du fichier
        que l'on va utiliser pour créer la vue qui permet de créer
        automatiquement un livre view > books > create.blade.php
        */
        //deprecated : return view is for blade files
        
        //return view('books.create');

        //redirect()->route is for reactJsconnexion
        return redirect()->route('books.createReact');
    }

    /* cette méthode possède le même nom que la méthode qui apparaît dans
    web.php pour "store" 
    elle gère l'action qui va être faite lorsqu'on va cliquer sur le bouton 
    "créer".
    On va injecter la classe Request, de illuminate.http.Request
    elle va contenir les infos qu'on aura envoyées (via la page web si j'ai bien compris)
    */
    public function store(Request $request){
        /*
        si on fait ça, on obtient à l'affichage web,
        une page avec un tableau, qui contient tout ce qui provient de notre formulaire 
        */
        //dd($request->all());

        //affiche juste le titre dans une page
       
        //dd($request->title);
        //d'autres possibilités évoquées dans la vidéo, mais non exploitées
        //dd($request->input('title'));
        //dd($request->get('title'));

        /*
        La méthode avec le factory est vraiment à titre d'exemple, 
        ce n'est pas comme ça qu'il faut faire normalement
        (la raison à cela, je crois,c'est pcq avec le factory on génère un user créé aléatoirement, donc ça ne correspond à ce que l'on voudrait 
        en pratique)
        */

        $user = User::factory()->create();

        Book::create([

           /* 
           A noter que le mot "title" fait référence
           au " name='title' " associé à l'input de la page views>create.blade
           il faut garder la correspondance.
           */
            'title' => $request->title,
            /*
            le id du user va être automatiquement généré
            */
            'user_id' => $user->id,
        ]);
        
        /* on renvoie le resultat de tout ça vers la page
        books.index ;
        et on devrait avoir un livre en plus.
        */
        return redirect()->route('books.index');
    }

    /**
     * $book permet de brancher le book que l'on veut éditer avec celui qu'on aura passé depuis l'url, en gros ça permet d'éditer le livre qu'on aura 
     * passé par l'url.
     */
    public function edit(Request $request, Book $book){
        /*
        cette vue permet d'éditer le livre.
        Il faut donc créer un fichier dans books.edit (book> edit.blade.php) pour la développer.
        Ici on renvoie le book.
        */
        return view('books.edit',
    [
        'book' => $book,
    ]);
    }

    /**
     * permet d'avoir un nouveaut titre pour le livre
     */
    public function update(Request $request, Book $book){
        
        /* ici on dit qu'on va lancer 
        la requête "update" de la bdd
        pour mettre à jour le titre du livre */
        $book->update([
            'title' => $request->title,
        ]);

         /* on renvoie le resultat de tout ça vers la page
        books.index ;
        et on devrait avoir un livre avec un titre mis à jour
        */
        return redirect()->route('books.index');

        /*useless, deprecated: 
        
        return view('books.edit',
    [
        'book' => $book,
    ]);*/
    }










    /**
     * permet de supprimer un livre
     */
    public function destroy(Book $book){
        /*
        supprime le livre de la base de données
        */
        $book->delete();

         /* on renvoie le resultat de tout ça vers la page
        books.index ;
        et on devrait avoir un livre en moins dans la bdd.
        */
        //option 1
        //return to_route('books.index');
        //option 2 (équivalent à 1)
        return redirect()->route('books.index');
        
    }
}

