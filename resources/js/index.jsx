//doesn't work
//require('./bootstrap');
import 'alpinejs';
//import 'bootstrap';
import { StrictMode } from "react";
import React from 'react';
import ReactDOM from 'react-dom';
import { createRoot } from "react-dom/client";

//need to be retrieved later
import App from "./App";

import AppEntry from "./Layouts/AppEntry";
//import Books from "./reactJs/components/Books";

//ajouté manuellement par nathan... (deprecated due to custom.scss that replaces it)
//import 'bootstrap/dist/css/bootstrap.css'; ()
//custom remplace bootstrap.css, plus exactement, il l'importe lui-même
// et permet d'utiliser d'autres librairies propres à bootstrap
import '/var/www/html/ListeNoir/ListeNoir/custom.scss';


/*rootApp is not a name taken from jsx but a name newly created that will be bind 
to jsx via "createRoot() + root.render("theJSXComponentIWantToBindWithRoot)
and then jsx will be bind to php via 
a div that recognize this name.

It seems to imply that only one 
JSX file can be bind with one
(not sure) component App.
But you can still create
several JSX files and bind them
with several inclusion of div via
index.blade.php as php receiver

maybe only one Main ReactJs page possible, since
there's only one link with @vite() connected to one file (this one)
*/
const rootElement = document.getElementById("rootApp");
const root = createRoot(rootElement);


root.render(
  <StrictMode>
    <AppEntry/>
  </StrictMode>
);
/*
const booksElements = document.getElementById("booksList");
const books = createRoot(booksElements);
*/
/*
root.render(
  <StrictMode>
    <AppBooks/>
  </StrictMode>
);
*/
/*
cette partie (en dessous) signifie que "root" doit afficher ("render") le composant "App" (qui correpspond au fichier App.js)
*/
/* need to be uncommented.
It's just a test
root.render(
  <StrictMode>
    <App/>
  </StrictMode>
);
*/
/*
ce qu'ils appellent app.jsx 
dans le second tuto serait en fait 
"index.jsx"
*/