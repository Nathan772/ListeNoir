<!DOCTYPE html>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <!--<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">-->
    <title>Laravel XX React</title>
    <!-- inclusion du fichier javascript 
     conseil made in gpt4
    -->

    @vite('resources/js/app.jsx')
    
    <!--@vite('resources/js/app.js') old deprecated-->
    
    <!-- old deprecated -->
    <!--<script src="{{ asset('resources/views/app2.js') }}" defer></script>-->
    
    <!-- permet de lancer la page comme page d'entrée js/app.js -->

    <!--<script src="resources/js/app.js" defer></script>-->
    <!--="{{ Vite::asset('resources/js/app.js') }}" defer></script>
    
-->
</head>
<body>
    <!--<p> On est dans resources > views > welcome.blade.php </p>
    <div id="counter"></div>-->

    root.render(
  <StrictMode>
    <App />
  </StrictMode>
);

</body>


</html>