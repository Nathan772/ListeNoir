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

/*

https://dev.to/ekafyi/quick-example-of-laravel-api-post-route-implementation-23ld
(x, [a,b])

x-> the name of the path chosen to connect 
with the fetch method of "BooksIndex.jsx"
in 
"axios.get('api/books')"
api is implicit in Route::get('(api)/books')
a -> the class used to call the "b" function
b-> the function called in controller to retrieve books
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
