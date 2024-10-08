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

import AppBooks from "./Layouts/AppBooks";
//import Books from "./reactJs/components/Books";

//ajouté manuellement par nathan... (deprecated due to custom.scss that replaces it)
//import 'bootstrap/dist/css/bootstrap.css'; ()
//custom remplace bootstrap.css, plus exactement, il l'importe lui-même
// et permet d'utiliser d'autres librairies propres à bootstrap
import '/var/www/html/ListeNoir/ListeNoir/custom.scss';


/*root is not a named taken from jsx but a name newly created that will be bind 
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
*/
const rootElement = document.getElementById("rootApp");
const root = createRoot(rootElement);


root.render(
  <StrictMode>
    <App/>
  </StrictMode>
);

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