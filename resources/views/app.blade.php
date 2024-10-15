<!DOCTYPE html>

<!-- ancien fichier 

welcome.blade.php

renommé, "app.blade.php"

-->


<!-- blade est le moteur de template de laravel par défaut 

le fichier test, permet de faire des tests unitaires sur laravel
le dossier vendor on touche pas, c'est indispensable mais c'est géré automatiquement
vite permet de gérer javascript


.env : définit les variables immortantes et globlaes de l'application

-->


<html lang="en">
<head>
    <meta charset="UTF-8">
    <!--<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">-->
    <title>Ma super application Laravel </title>
    <!-- inclusion du fichier javascript 
     conseil made in gpt4
    -->
    <!-- nécessaire. attention,
     il faut aussi mettre à jour le fichier
     "vite.config.js" avec le path du fichier jsx
      -->
     <!-- React JS  (permet l'import de ReactJs et sa connexion avec laravel)-->

      @vite('resources/js/index.jsx')

    <!-- Styles -->
  
   
  
   
    <!--@vite('resources/js/app.js') old deprecated-->
    
    <!-- old deprecated -->
    <!--<script src="{{ asset('resources/views/app2.js') }}" defer></script>-->
    
    <!-- permet de lancer la page comme page d'entrée js/app.js -->

   
</head>


<body>

    <p> On est dans resources > views > app.blade.php </p>
    <!-- deprecated -->
    <!--<div id="counter"></div>-->
    <!--
    <script src="{{ asset("resources/js/App.jsx") }}" defer>
</script>-->
<!--
ce que le yield signifie, c'est que à chaque fois qu'on va créé une vue 
elle "extendra" le fichier app.blade.php et la partie dynamique sera le "content"
-->
@yield('content')

<!-- le problème de type "Target container is not a DOM element"
 est résolue par cette div
-->
<!--<div id="rootApp"></div>-->

<div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
  <div class="p-6 bg-white border-b border-gray-200" id="app">
  </div>
</div>


</body>


</html>