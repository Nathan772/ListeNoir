<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*

The routes in this file are for php to php.


*/







/*
load the mainLink for any view that come fr
1) which url
2) what to show (which is connected by the url chosen)
*/

/*Route::view('/books/list', 'books/list');
*/
Route::get('/books/create', [\App\Http\Controllers\BookController::class, 'create'])->name('books.createReact');
























/*

The path of this file are connected to 
AppBooks.jsx path that are used to choose which path refers to which component
*/
/*

c'est cette classe qui gère l'affiche du fichier test.php
*/
/*
get est le verbe http

le "/" signifie qu'on est place à la racine 
*/

/*
Route::get('/', function () {
/* view va appeler un helper qui est welcome.blade.php.
Ici, on a plus la page d'affichage classique, car on a modifié le fichier blade pour qu'il redirige vers app avec la liste
de fruits (initialement)
*/
    //oldname
    //return view('welcome');
    //old use
    //return view('app');

    /*on va appeler index,
    lorsqu'on est à la racine de façon à ne pas appeler directemenent le template (app)
    return view('index');
});*/

/*

premier argument : la position du fichier dans l'arborescence


deuxième argument : le nom de la méthode choisit 
pour gérer ça qui se trouve dans Book::controller


troisième argument : le nom qui sera utilisé pour l'appeler
quand on fera "route('LeNomChoisit')" (ici accueil)

*/
//Route::get('/app', [\App\Http\Controllers\BookController::class, 'accueil'])->name('accueil');


/*
si il y a une seule action on peut simplifier en :

Route::view('/', view:'welcome');
*/



//add by nathan
//necessary for BooksIndex
//Route::view('/{any?}', 'dashboard')->where('any', '.*');
//this line will load the dashboard for any view that comes
// from React Router
/* the name "app" 
has to match with the main
entryPoint "blade"
file of the project
*/

//useless cause bugs ???
//Route::view('/{any?}', 'app')->where('any', '.*');

//useful for laravel X react
// translation : 
// if books/list is the url (it will be decided by Route in ) then 
// call the file chosen in blade, here "booksList" (which refers to 
//booksList.blade.php) et suit la route définie pour books/list (voir AppBooks.jsx)
// "name(books.list)" --> name for ??? but useful


//interprétation 2
/*
si dans l'url j'ai arg1, alors appeler arg2 
*/
//Route::view('/books/list', 'books/list')->name('books.list');
//name correspond au nom qui sera utilisé pour ahref
//Route::get('/books/list', [\App\Http\Controllers\BookController::class, 'index'])->name('books.list');


/* correspond à ce qui est utilisé pour le create de create.blade.php (début)*/




//Route::get('/books/create', [\App\Http\Controllers\BookController::class, 'create'])->name('books.createReact');



/* 

on appelle la méthode "store" de "BookController.php" 
lorsqu'on clique sur le bouton "créer" de books.create. 
CONTRAIREMENT À ce que l'on voit dans le tuto,
il faut donc  préciser dans le path du post
le mot **store** (associé à la méthode).
*/

//Route::post('/books/store', [\App\Http\Controllers\BookController::class, 'store'])->name('books.store');









/* correspond à ce qui est utilisé pour le create de create.blade.php (fin)*/





/* correspond à ce qui est utilisé pour le edit de edit.blade.php (début)*/






/*
ici on précise aussi 
{book} à edit pour lui fournir le "book" que l'on souhaite traiter.
Ça correspond au $book qui est passé en argument de la méthode
"edit" de app > Https > Controllers > BookController 
*/

//Route::get('/books/edit/{book}', [\App\Http\Controllers\BookController::class, 'edit'])->name('books.edit');

/* on appelle la méthode "update" lorsqu'on appelle edit de books.update.
On lui passe le book comme argument.
On appelle put car on appelle @method('PUT') dans edit.blade (qui est associé à update)
*/

//Route::put('/books/edit/{book}', [\App\Http\Controllers\BookController::class, 'update'])->name('books.update');







/* correspond à ce qui est utilisé pour le create de edit.blade.php (fin)*/














/* correspond à ce qui est utilisé pour le destroy de delete.blade.php (début)*/






/*
ici on précise aussi 
{book} à supprimer pour lui fournir le "book" que l'on souhaite supprimer.
Ça correspond au $book qui est passé en argument de la méthode
"destroy" de app > Https > Controllers > BookController 
qui doit aussi matcher avec le fichier edit.blade > books.destroy (du formulaire)
*/

//Route::delete('/books/destroy/{book}', [\App\Http\Controllers\BookController::class, 'destroy'])->name('books.destroy');

//Route::delete('/books/{book}', [\App\Http\Controllers\BookController::class, 'destroy'])->name('books.destroy');

/* 
on appelle la méthode "destroy" lorsqu'on appelle edit de books.delete.
On lui passe le book comme argument.
On appelle put car on appelle @method('PUT') dans edit.blade (qui est associé à update)
*/

//Route::put('/books/edit/{book}', [\App\Http\Controllers\BookController::class, 'destroy'])->name('books.destroy');







/* correspond à ce qui est utilisé pour le destroy de delete.blade.php (fin)*/