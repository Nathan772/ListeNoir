
import React from 'react';
import ReactDOM from 'react-dom';
import { BrowserRouter, Routes, Route, Link } from "react-router-dom";
import BooksIndex from "../reactJs/components/Indexes/BooksIndex"
import App from "../App"
import FruitForm from '../reactJs/components/FruitForm';
import MainLinks from '../reactJs/components/MainLinks';
/* the name "BooksIndex" 
refers to 
"BooksIndex" which is imported but which is also the 
function chosen to render.

Le nom path="/app" 
doit faire référence au "app" du fichier
app.blade...

qui sert de point d'entrée php



Books 

"/books/create"
sert de route pour la création de livres

fruitForm will be chosen when you will choose the path
books/create,
etc...



the name allowed 
"/app", "/books/create",...
come from web php Route::get('/books/create'...)



"/" must always be defined, it's the root of the project

You also have to update the path
written
into the element in "element={<>}"
in the case you use a post/get/update/etc...
method into it
*/ 


/*
essayer de voir si on peut ajouter 
des liens cliquablesq qui mèneraient vers
des routes
Remarques : les ROUTES servent 
pour des requêtes vers le serveur, elles doivent pas servir à remplacer 
les "<a href>...""
*/

//on pourrait afficher par défaut app dans AppBooks
//mais ce n'est pas le but
//<Route path="/" element={<App/>} /
/*    <Route path="/" element={<MainLinks/>} />
--> ne fonctionne pas comme on le voudrait
*/
function AppBooks(){
    return (
        <div>  
        <BrowserRouter>
        <Routes>
        <Route path="/books/list2" element={<BooksIndex/>} />
        <Route path="/books/create" element={<FruitForm/>} />
        </Routes>

    </BrowserRouter>
    </div>
    
    )
}
/*
function AppBooks(){
    return (
        <h1>bjr AppBooks</h1>
    
    )
}*/

export default AppBooks;