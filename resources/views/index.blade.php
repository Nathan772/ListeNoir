

<!--
Fait référence à app.blade.php (l'ancien welcome.blade...)
-->
@extends('app')

<!--
Affiche les données de books pour chaque book contenu :

titre
nom du livre
-->

<!-- cela permet de dire :
 la partie que tu avais appelée "content" dans "app",
 remplace là par ce qui va suivre dans cette section 
lors de l'affichage
-->

@section('content')

<h1> hello, INDEX.BLADE.php </h1>

<!--
this paths refer to the one use in
web.php
And
AppBooks.jsx
-->
<!--
<a href="{{ route('books.createReact')}}"> Créer un article </a>
-->
<br>
<br> 
<!--
<a href="{{ route('books.list')}}"> Afficher la liste des livres disponibles en boutique </a>
-->
<!--
bind with index.jsx
element associated with root
-->
<div id="rootApp"></div>
<a href="{{ route('books.list')}}"> Afficher la liste des livres disponibles en boutique </a>
@endsection