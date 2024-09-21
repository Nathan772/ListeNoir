import { StrictMode } from "react";
import React from 'react';
import ReactDOM from 'react-dom';
import { createRoot } from "react-dom/client";

import App from "./App";

//ajouté manuellement par nathan... (deprecated due to custom.scss that replaces it)
//import 'bootstrap/dist/css/bootstrap.css'; ()
//custom remplace bootstrap.css, plus exactement, il l'importe lui-même
// et permet d'utiliser d'autres librairies propres à bootstrap
import '/var/www/html/ListeNoir2/custom.scss';

const rootElement = document.getElementById("root");
const root = createRoot(rootElement);

/*
cette partie (en dessous) signifie que "root" doit afficher ("render") le composant "App" (qui correpspond au fichier App.js)
*/
root.render(
  <StrictMode>
    <App />
  </StrictMode>
);