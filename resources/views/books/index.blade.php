

<!--
Fait référence à app.blade.php (l'ancien welcome.blade...)
-->
@extends('app')

<!--
C'est ce fichier affiche les données de books pour chaque book contenu :

titre
nom du livre
-->

<!-- cela permet de dire :
 la partie que tu avais appelée "content" dans "app",
 remplace là par ce qui va suivre dans cette section 
lors de l'affichage
-->

@section('content')

<h1> hello, ZA WARUUUUUDO </h1>


@foreach($books as $book) 


<p>


{{ $book->title }} de {{ $book->user->name}}


</p>

<br>

<p>

    <!-- ici on va faire appel à "edit" de books 
    on peut ensuite passer différente choses : 
        le $book ou un de ses champs
    -->
    <!-- Une possibilité : <a href="{{ route('books.edit', $book->id) }}"> Editer </a> -->
    <a href="{{ route('books.edit', $book)}}"> Editer </a>
</p>

@endforeach

@endsection