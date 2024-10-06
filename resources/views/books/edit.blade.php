@extends('app');

@section('content')
    <!-- ce formulaire permettra de modifer un livre à la base de données 
     comment on a définit cette nouvelle méthode en post, il faut aussi la définir dans le fichier "web.php"
    -->
    <!-- <form action ="/books" method="POST"> old version-->
    <!-- le nom "books.update" fait écho à books.update de web.php en Route::post
     le $book correspond au book qui est attendu dans ""Route::post('/books/edit/{book}""
     de "web.php"
    -->
    <form action ="{{ route('books.update', $book)}}" method="POST">

        <!-- csrf est indispensable pour se prémunir des failles web -->

        @csrf 

        <!--
        Ce sera en PUT ou Patch mais patch n'est pas supporté dans cette version, donc ce sera "PUT"
        -->
        @method('PUT')

        <!-- on peut donner une valeur par défaut, ici le titre du book
         que l'on récupère -->
        <input type="text" name="title" value="{{$book->title}}">
        <button type="submit"> Éditer </button>

    </form>

    <!-- gère la suppression  (DÉBUT) -->

    
    <!--(cause des bugs...)-->

    <form action ="{{ route('books.destroy', $book)}}" method="POST">

        <button type="submit"> Supprimer </button>

    </form>

    <!-- gère la suppression  (FIN) -->
    
@endsection