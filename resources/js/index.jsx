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

//need to retrieve later just temporary comment for tests
//const rootElement = document.getElementById("root");

//need to replace later just temporary usage for tests
const rootElement = document.getElementById("root");
const root = createRoot(rootElement);


root.render(
  <StrictMode>
    <AppBooks/>
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