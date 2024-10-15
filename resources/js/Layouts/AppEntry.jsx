
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


*/ 

function AppEntry(){
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

export default AppEntry;