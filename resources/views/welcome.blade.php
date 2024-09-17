<!DOCTYPE html>

<!-- blade est le moteur de tempalte de laravel par défaut 

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
    <title>Laravel XX React</title>
    <!-- inclusion du fichier javascript 
     conseil made in gpt4
    -->
    <!-- nécessaire. attention,
     il faut aussi mettre à jour le fichier
     "vite.config.js" avec le path du fichier jsx
      -->
    @vite('resources/js/index.jsx')
    <!-- Styles -->
  
   
   <!-- React JS -->
   
    <!--@vite('resources/js/app.js') old deprecated-->
    
    <!-- old deprecated -->
    <!--<script src="{{ asset('resources/views/app2.js') }}" defer></script>-->
    
    <!-- permet de lancer la page comme page d'entrée js/app.js -->

    <!--<script src="resources/js/app.js" defer></script>-->
    <!--="{{ Vite::asset('resources/js/app.js') }}" defer></script>
    
-->
</head>
<body>
    <p> On est dans resources > views > welcome.blade.php </p>
    <!--<div id="counter"></div>-->
    <!--
    <script src="{{ asset("resources/js/App.jsx") }}" defer>
</script>-->

<!-- Target container is not a DOM element
 est résolue par cette div
-->
<div id="root"></div>
</body>


</html>