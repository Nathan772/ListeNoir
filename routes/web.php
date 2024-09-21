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

c'est cette classe qui gère l'affiche du fichier test.php
*/
/*
get est le verbe http

le "/" signifie qu'on est place à la racine 
*/

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
    */
    return view('index');


});

/*
si il y a une seule action on peut simplifier en :

Route::view('/', view:'welcome');
*/

/*
premier paramètre du route : la class chosie
deuxième paramètre : la méthode choisie (index)
le name qui suit la première parenthèse correspond au nom que l'on souhaite donner à la méthode, ici:
books.index
*/

Route::get('/books', [\App\Http\Controllers\BookController::class, 'index'])->name('books.index');




/* correspond à ce qui est utilisé pour le create de create.blade.php (début)*/








Route::get('/books/create', [\App\Http\Controllers\BookController::class, 'create'])->name('books.create');

/* 

on appelle la méthode "store" de "BookController.php" 
lorsqu'on clique sur le bouton "créer" de books.create. 
CONTRAIREMENT À ce que l'on voit dans le tuto,
il faut donc  préciser dans le path du post
le mot **store** (associé à la méthode).
*/

Route::post('/books/store', [\App\Http\Controllers\BookController::class, 'store'])->name('books.store');









/* correspond à ce qui est utilisé pour le create de create.blade.php (fin)*/





/* correspond à ce qui est utilisé pour le edit de edit.blade.php (début)*/






/*
ici on précise aussi 
{book} à edit pour lui fournir le "book" que l'on souhaite traiter.
Ça correspond au $book qui est passé en argument de la méthode
"edit" de app > Https > Controllers > BookController 
*/

Route::get('/books/edit/{book}', [\App\Http\Controllers\BookController::class, 'edit'])->name('books.edit');

/* on appelle la méthode "update" lorsqu'on appelle edit de books.update.
On lui passe le book comme argument.
On appelle put car on appelle @method('PUT') dans edit.blade (qui est associé à update)
*/

Route::put('/books/edit/{book}', [\App\Http\Controllers\BookController::class, 'update'])->name('books.update');







/* correspond à ce qui est utilisé pour le create de edit.blade.php (fin)*/














/* correspond à ce qui est utilisé pour le destroy de delete.blade.php (début)*/






/*
ici on précise aussi 
{book} à supprimer pour lui fournir le "book" que l'on souhaite supprimer.
Ça correspond au $book qui est passé en argument de la méthode
"destroy" de app > Https > Controllers > BookController 
qui doit aussi matcher avec le fichier edit.blade > books.destroy (du formulaire)
*/

Route::delete('/books/destroy/{book}', [\App\Http\Controllers\BookController::class, 'destroy'])->name('books.destroy');

//Route::delete('/books/{book}', [\App\Http\Controllers\BookController::class, 'destroy'])->name('books.destroy');

/* 
on appelle la méthode "destroy" lorsqu'on appelle edit de books.delete.
On lui passe le book comme argument.
On appelle put car on appelle @method('PUT') dans edit.blade (qui est associé à update)
*/

//Route::put('/books/edit/{book}', [\App\Http\Controllers\BookController::class, 'destroy'])->name('books.destroy');







/* correspond à ce qui est utilisé pour le destroy de delete.blade.php (fin)*/