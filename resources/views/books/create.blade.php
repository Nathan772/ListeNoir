@extends('mainLink')

<!--
extends permet de se préparer à récupérer le contenu d'une page
-->

<!--
section + endesction (il n'est pas possible d'utiliser
les arobases dans les commentaires sans 
produire une erreur) permet de mettre dans cette partie le contenu d'une autre 
page pour l'afficher.
Le nom de la apge est le nom associé à la section
-->




@section('content')

<br>
<br>
La Page pour ajouter un nouveau livre.

<br>
<br>
    <!-- ce formulaire permettra d'ajouter un livre à la base de données 
     comment on a définit cette nouvelle méthode en post, il faut aussi la définir dans le fichier "web.php"
    -->
    <!-- <form action ="/books" method="POST"> old version-->
    <!-- le nom "books.store" fait écho à books.store de web.php en Route::post -->
    Titre de l'oeuvre : <form action ="{{ route('books.store')}}" method="POST">

        <!-- csrf est indispensable pour se prémunir des failles web -->

        @csrf 

        <input type="text" name="title">
        <button type="submit"> Créer </button>
    </form>

@endsection

   