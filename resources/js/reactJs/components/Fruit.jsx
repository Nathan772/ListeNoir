import React from 'react';

//remaque il faut mettre en majuscule le nom du fichier car c'est un composant
//on pouvait écrire ".js" ou ".jsx"

/*

Ce fichier gère l'affichage du formulaire via les props qu'il reçoit en argument.

*/

/*
On préfère créer des composants comme ici, qui sont réutilisables
en faisant RAISE the event, c'est à dire, faire remonter les fonctionnalités 
via des props.
Et ici, toute nouvelle fonctionnalité n'a pas besoin de modifier 
le composant Fruit pour être implémentée, d'où la flexibilité, 
il suffit de changer les props envoyé au composant (ici surtout l'actionClick).
*/
export default function Fruit({ fruitInfo, onClick }) {
    //state
    //raccourci
    // const fruitInfo = props1.fruitInfo;
    // const onFruitDelete = props1.onFruitDelete;
  
    // const  { fruitInfo, onFruitDelete } = props1;
    //comportement
    //render
  
    /*On va devoir utiliser les "props" pour utiliser les 
    composants du parent chez l'enfant.
    
    */
  
    /*
  Dans cette dernière version, lorsque l'on clique sur le bouton, on va recevoir un comportement.
  On ne peut pas prévoir ce comportement à partir du code de cette page,
  celui-ci s'adaptera selon ce qui aura été reçu pour "actionClick",
  cela peut être varié. d'où la flexbilité.
  Si on veut rendre un composant fléxible réutilisable, on envoie tout en props.
    */
    /*
    return (
      <div>
        <li>
          {fruitInfo.nom} <button onClick={actionClick}>X </button>
        </li>
      </div>
    );
  }*/
  
    /* V6
  avec onCick
  */
    return (
      <div>
        <li>
          {fruitInfo.nom} <button onClick={onClick}>X </button>
        </li>
      </div>
    );
  }
  