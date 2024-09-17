import { StrictMode } from "react";
import React from 'react';
import ReactDOM from 'react-dom';
import { createRoot } from "react-dom/client";

import App from "./App";

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