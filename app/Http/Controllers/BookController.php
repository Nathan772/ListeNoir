<?php

namespace App\Http\Controllers;

//ajouté manuellement
use App\Models\Books;
//ajouté manuellement
use App\Models\User;

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

    /*permet de créer la vue, le nouveau livre */
    public function create(){
        /*"view(books.create)" correspond au path du fichier
        que l'on va utiliser pour créer la vue qui oermet de créer
        automatiquement un livre view > books > create
        */
        return view('books.create');
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
        dd($request->all());

        /*
        La méthode avec le factory est vraiment à titre d'exemple, 
        ce n'est pas comme ça qu'il faut faire normalement
        (la raison à cela, je crois,c'est pcq avec le factory on génère un user créé aléatoirement, donc ça ne correspond à ce que l'on voudrait 
        en pratique)
        */

        // $user = User::factory()->create();

        // Book::create([

           
        //     'title' => ,
        //     /*
        //     le id du user va être automatiquement généré
        //     */
        //     'user_id' => $user->id,
        // ]);
    }
}

