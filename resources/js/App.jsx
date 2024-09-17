//import "./styles.css";

//s'importe automatiquement via un click
import { useRef, useState } from "react";

import React from "react";
import ReactDOM from "react-dom";


//il faut écrire ces lignes manuellement
import Fruit from "./reactJs/components/Fruit";
import FruitForm from "./reactJs/components/FruitForm";

//cette page gère l'affichage de la page nommée App

//Index et app.js ne sont pas utiles
//seul App va être utile car tout ce qui va y être écrit sera renvoyé au navigateur
// : index.html

//React == librairie en composant : on va voir ce que c'est ...
// export default function App() {
//   return (
//     <div className="App">
//       <h1>Hello ZaWarudo</h1>
//       <h2>Start editing to see some magic happen!</h2>
//       <h2> Hello Jojo </h2>
//     </div>
//   );
// }

//composant == nom+ paramètres +instructions

//nom : App
//function App() {
/*
composant react implique trois choses : 

-state (état, données)
-comportement
-affichage (rendu == render == rerender == réactualisation de l'affichage)*/

//state

//un tableau // le state
//setCompteur permettra de modifier compteur, c'est un mutateur, un setteur
//on passe tjrs par le setteur pour permettre de update la page automatiquement
//si on ne passe pas par le setteur, l'affichage ne sera pas update automatiquement
/*const [compteur, setCompteur] = useState(1);

  //comportement
  const handleClick = () => {
    setCompteur(compteur + 1);
    console.log("compteur vaut : " + compteur);
  };*/

//gère le rendu : c'est du html dans du javascript
//interpolation JsX : "quitter le monde jsx" pour qu'il soit interprété comme
//du javascript pour ça on applique les accolade sur la variable comme en python
//affichage (render)
/*return (
    <div>
      <h1>{compteur}</h1>
      <button onClick={handleClick}>Incrémente</button>{" "}
    </div>
  );
}*/

/*une bonne pratique en react est de gérer
  est de gérer les comportements associés à un state
  proche de là où il a été défini.
  En d'autres termes ce serait comme écrire les méthodes 
  pour une classe, là où elle a été définie (grossièrement)
  */

function App() {
  //state
  const [fruits, setFruits] = useState([
    { id: 1, nom: "Abricot" },
    { id: 2, nom: "Banane" },
    { id: 3, nom: "Cerise" },
  ]);
  //nouveau state , Sam correspond à la valeur par défaut
  // assignation : ascendant + descendant
  //const [nouveauFruit, setNouveauFruit] = useState("");

  //va permettre d'associer un élément à une référence (un emplacement mémoire
  //que on peut voir comme un id)
  /*méthode du useRef : ça fonctionne mais c'est très mal vu en tant que développeur
    React, donc il faut utiliser une autre méthode..., 
    car useRef et inputRef, ça ne produit pas de reRender automatique de l'affichage
    ce qui peut poser des problèmes, donc on va utiliser une deuxième méthode.
  */
  const inputRef = useRef();

  //en react on peut stocker du jsx dans une variable
  const voiture = <li> Tesla </li>;
  const voitures = [<li>Audi</li>, <li>BMW</li>, <li>Clio</li>];
  //behavior

  function handleRemoveFruit(fruitId) {
    console.log("fruit qui va être supprimé : " + fruitId);
    //const newFruits = fruits.filter((fruit) => fruitId != fruit.id);
    //setFruits(newFruits);

    //1. copie profonde du tableau
    //const fruitsCopy = fruits.slice();
    const fruitsCopy = [...fruits];

    //2. manipuler mon state

    fruitsCopyUpdated = fruitsCopy.filter((fruit) => fruitId != fruit.id);
    setFruits(fruitsCopyUpdated);
  }

  /* notion de réusabilité des composants , pour éviter de le réecrire 
  et le rendre fléxible */

  function afficherFruitPrefere(fruitNom) {
    alert("j'aime trop ce fruit " + fruitNom);
  }

  /*
  On met ici tout ce qui a un lien avec la copie du
  state est mtnt géré ici
  */
  /*une bonne pratique en react est de gérer
  est de gérer les comportements associés à un state
  proche de là où il a été défini.
  En d'autres termes ce serait comme écrire les méthodes 
  pour une classe, là où elle a été définie (grossièrement)
  */
  const handleAdd = (fruitAAjouter) => {
    //1. copie profonde du tableau
    const fruitsCopy = fruits.slice();

    // //2. ajout
    fruitsCopy.push(fruitAAjouter);

    // //3. update
    setFruits(fruitsCopy);
  };

  /* old method avec useRef : moins bonne, non recommandée...
   return (
    <div>
      <h1> Liste de fruits</h1>
      <ul>
        {fruits.map((fruit) => (
          <li key={fruit.id}>
            {fruit.nom}
            <button onClick={handleRemoveFruit.bind(this, fruit.id)}>X </button>
          </li>
        ))}
      </ul>

      <form action="submit" onSubmit={handleAddFruit}>
        <input ref={inputRef} type="text" placeholder="Ajoutez un fruit..." />
        <button> Ajouter + </button>
      </form>
    </div>*/

  //render

  /*
  V2
  return (
    <div>
      <h1> Liste de fruits</h1>
      <ul>
        {fruits.map((fruit) => (
          <li key={fruit.id}>
            {fruit.nom}
            <button onClick={handleRemoveFruit.bind(this, fruit.id)}>X </button>
          </li>
        ))}
      </ul>

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
  );*/

  /*
  On a simplifié tout le code 
  avec le système de balise et autre par 
  deux sous-balises : 

  <Fruit/>
  <FruitForm/>

  qui gère ça 
  Elles récupèrent les variables dont elles ont besoins 
  via des props.
  */

  /*V3
  return (
    <div>
      <h1> Liste de fruits</h1>
      <ul>
        {fruits.map((fruit) => (
          //des props : fruitInfo, onFruitDelete...

          
          <Fruit
            fruitInfo={fruit}
            onFruitDelete={handleRemoveFruit}
            newFruit={nouveauFruit}
          />
        ))}
      </ul>
      <FruitForm
        handleSubmitAddFruitForm={handleSubmitAddFruit}
        handleChangeAddFruitForm={handleChangeAddFruit}
      />
    </div>
  );*/

  /* V4 :

  comme les éléments utilisés par FruitForm sont seulement utilisés dans son fichier
  , c'est une meilleure pratique de tous les déplacer directement dans FruitForm
  plutôt que d'utiliser les props mais pour corbeilleDeFruits et setCorbeilleFruits,
  ce n'est tjrs pas la meilleure pratique, donc on va choisir une nouvelle
  méthode dans la V5 */

  /*return (
    <div>
      <h1> Liste de fruits</h1>
      <ul>
        {fruits.map((fruit) => (
          //des props : fruitInfo, onFruitDelete...

          <Fruit fruitInfo={fruit} onFruitDelete={handleRemoveFruit} />
        ))}
      </ul>
      <FruitForm corbeilleDeFruits={fruits} setCorbeilleFruits={setFruits} />
    </div>
  );*/
  /*
  V5 :
  en fait lorsqu'on définit un state, si y a un comportement qui y est associé
  alors il faut définir les deux proches l'un de l'autre.
  */
  /*return (
    <div>
      <h1> Liste de fruits</h1>
      <ul>
        {fruits.map((fruit) => (
          //des props : fruitInfo, onFruitDelete...

          <Fruit
            fruitInfo={fruit}
            actionClick={() => afficherFruitPrefere(fruit.nom)}
            key={fruit.id}
          />
        ))}
      </ul>
      <FruitForm handleAdd={handleAdd} />
    </div>
  );
}*/

  /* V6
on remplace "actionClick" par "onClick".
La raison, est que l'on veut que le composant soit utilisé commue une boite
noire.Le collègue ne doit pas se demander comment ça se passe
de l'autre côté (avec les props), il doit juste savoir qu'en cliquant il va
déclencher un événement qui va effecteur l'action qu'il a définit dans Apps
pour le composant.

remarque : 

-de façon de définir le nom du props : 

1) On veut un props réutilisable, qui est générique, qui va avoir différents comportements
selon ce que l'utilisateur en fait : on donne un nom le plus générique possible ;
comme ici, avec "onClick".

2) On sait exactement ce que le props va faire, il va faire une action 
précise bien définie et unique : on donne le même nom que la méthode qui va être
appelée.
Comme ici, avec "handleAdd".


*/
  return (
    <div>
      <h1> Liste de fruits</h1>
      <ul>
        {fruits.map((fruit) => (
          //des props : fruitInfo, onFruitDelete...

          <Fruit
            fruitInfo={fruit}
            onClick={() => afficherFruitPrefere(fruit.nom)}
            key={fruit.id}
          />
        ))}
      </ul>
      <FruitForm handleAdd={handleAdd} />
    </div>
  );
}

export default App;

