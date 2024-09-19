@extends('app');

@section('content')
    <!-- ce formulaire permettra d'ajouter un livre à la base de données 
     comment on a définit cette nouvelle méthode en post, il faut aussi la définir dans le fichier "web.php"
    -->
    <!-- <form action ="/books" method="POST"> old version-->
    <!-- le nom "books.store" fait écho à books.store de web.php en Route::post -->
    <form action ="{{ route('books.store')}}" method="POST">

        <!-- csrf est indispensable pour se prémunir des failles web -->

        @csrf 

        <input type="text" name="title">
        <button type="submit"> Créer </button>
    </form>
@endsection