

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

@foreach($books as $book) 

{{ $book->title }} de {{ $book->user->name}}

@endforeach

@endsection