<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

//add by nathan
use App\Http\Controllers\BookController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

//apiResource est un mot créé de toute pièce
// (il faut aussi le créer pour l'utiliser via postman)
//books fait référence aux fichiers dans database > migration >
// ... create_books_table ... 

//on peut aussi utiliser des mots comme get
/*
the name associated to the "arobase" : "indexForReact"
refers to the method called
by BookController that has the same name.
It will be called to perform the request
source
https://dev.to/ekafyi/quick-example-of-laravel-api-post-route-implementation-23ld
*/




/*


the routes here are for 
php to reactJs


*/





/* 
premier argument : le path
deuxième argument: la méthode de classe que l'on va utiliser pour récupérer des infos en backend
3 eme argument : le nom à utiliser lorsqu'on fait le a href
*/

//works but only to show data not for direction to BooksIndex.jsx
//Route::get('/books/list', [BookController::class, 'indexForReact'])->name("books.list");

//Route::apiResource('/books/list', BookController::class);

#Route::get('/books/list', BookController::class);

//Route::view('/books/list', [BookController::class, 'indexForReact'])->name("books.list");


//non fonctionne sur postman, donc impossible 
//de tester via server direct, à éviter
//Route::apiResource('/books', BookController::class);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
