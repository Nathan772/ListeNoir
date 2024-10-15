
import React from 'react';
import ReactDOM from 'react-dom';
import { BrowserRouter, Routes, Route, Link } from "react-router-dom";
import BooksIndex from "../reactJs/components/Indexes/BooksIndex"
import App from "../App"

/* the name "BooksIndex" 
refers to 
"BooksIndex" which is imported but which is also the 
function chosen to render.

Le nom path="/app" 
doit faire référence au "app" du fichier
app.blade...

qui sert de point d'entrée php

Books 
"/app" doit tjrs référencer vers qqc
sinon ça provoque une erreur, 


"/books/create"
sert de route pour la création de livres


*/ 

function AppEntry(){
    return (
        <BrowserRouter>
        <Routes>
        
        <Route path="/" element={<BooksIndex/>} />
        <Route path="/app" element={<BooksIndex/>} />
        <Route path="/books/create" element={<BooksIndex/>} />
        </Routes>
    </BrowserRouter>
    
    )
}

export default AppEntry;