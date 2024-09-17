/*
Ce fichier gère l'affichage du formulaire via les props qu'il reçoit en argument.

*/

import React from 'react';

/*
export default function FruitForm({
  handleSubmitAddFruitForm,
  handleChangeAddFruitForm,
  newFruit,
}) {
  //state
  //behavior
  //render
  return (
    <div>
      <form action="submit" onSubmit={handleSubmitAddFruitForm}>
        <input
          value={newFruit}
          type="text"
          placeholder="Ajoutez un fruit..."
          onChange={handleChangeAddFruitForm}
        />
        <button> Ajouter + </button>
      </form>
    </div>
  );
}*/

import { useState } from "react";

//On utilise un props pour la liste de Fruit, car elle est aussi
//utilisée par le fichier Fruit.jsx

/* V1 : peut être amélioré en rapprochant ce qui est en lien avec 
le state avec les comportements */
/*
export default function FruitForm({ corbeilleDeFruits, setCorbeilleFruits }) {
  //state

  //nouveau state , Sam correspond à la valeur par défaut
  // assignation : ascendant + descendant
  const [nouveauFruit, setNouveauFruit] = useState("");

  //behavior
  //event est un nom préfédéfini, comme "this", qui fait référence à l'événement
  //d'envoi à un formulaire.
  function handleSubmitAddFruit(event) {
    //empêche le rechargement
    event.preventDefault();
    // const fruitAjout = formData.get("fruitAjout");
    // console.log("le nouveau fruit ajouté est le fruit : " + { fruitAjout });

    //1. copie profonde du tableau
    const fruitsCopy = corbeilleDeFruits.slice();

    const fruitAAjouter = { id: new Date().getTime(), nom: nouveauFruit };
    // //2. ajout
    fruitsCopy.push(fruitAAjouter);

    // //3. update
    setCorbeilleFruits(fruitsCopy);
    //On réinitialise
    setNouveauFruit("");
    //alert("entrée dans addfruit");
  }

  function handleChangeAddFruit(event) {
    const valueAfterChange = event.target.value;
    console.log(valueAfterChange);
    setNouveauFruit(valueAfterChange);
    // const newFruit = { id: fruits.length, nom: event.target.value };
    // const newFruits = fruits.slice();
    // newFruits.concat(newFruit);
    // setFruits(newFruits);
  }

  //render
  return (
    <div>
      <form action="submit" onSubmit={handleSubmitAddFruit}>
        <input
          value={nouveauFruit}
          type="text"
          placeholder="Ajoutez un fruit..."
          onChange={handleChangeAddFruit}
        />
        <button> Ajouter + </button>
      </form>
    </div>
  );
}*/

/* 

V2 : meilleure méthode :

tout ce qui a un lien avec la copie du state doit 
être déplacé vers App.js.

*/
export default function FruitForm({ handleAdd }) {
  //state

  //nouveau state , Sam correspond à la valeur par défaut
  // assignation : ascendant + descendant
  const [nouveauFruit, setNouveauFruit] = useState("");

  //behavior
  //event est un nom préfédéfini, comme "this", qui fait référence à l'événement
  //d'envoi à un formulaire.
  function handleSubmitAddFruit(event) {
    //empêche le rechargement de la page
    event.preventDefault();
    const fruitAAjouter = { id: new Date().getTime(), nom: nouveauFruit };
    // //2. ajout
    //fruitsCopy.push(fruitAAjouter);

    //3. Update Fruit à ajouter
    handleAdd(fruitAAjouter);

    //4. On réinitialise
    setNouveauFruit("");
    //alert("entrée dans addfruit");
  }

  function handleChangeAddFruit(event) {
    const valueAfterChange = event.target.value;
    console.log(valueAfterChange);
    setNouveauFruit(valueAfterChange);
    // const newFruit = { id: fruits.length, nom: event.target.value };
    // const newFruits = fruits.slice();
    // newFruits.concat(newFruit);
    // setFruits(newFruits);
  }

  //render
  return (
    <div>
      <form action="submit" onSubmit={handleSubmitAddFruit}>
        <input
          value={nouveauFruit}
          type="text"
          placeholder="Ajoutez un fruit..."
          onChange={handleChangeAddFruit}
        />
        <button> Ajouter + </button>
      </form>
    </div>
  );
}
