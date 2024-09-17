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

*/

Route::get('/', function () {
/* view va appeler un helper qui est welcome.blade.php.
Ici, on a plus la page d'affichage classique, car on a modifié le fichier blade pour qu'il redirige vers app avec la liste
de fruits (initialement)
*/
    return view('welcome');
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