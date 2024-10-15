
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

le path correspoond à l'url pour lequel l'élément va s'afficher


*/ 

function AppEntry(){
    return (
        <div>  
        <BrowserRouter>
        <Routes>
        <Route path="/" element={<BooksIndex/>} />
        <Route path="/books/list" element={<BooksIndex/>} />
        <Route path="/books/create" element={<FruitForm/>} />
        </Routes>

    </BrowserRouter>
    </div>
    
    )
}

export default AppEntry;