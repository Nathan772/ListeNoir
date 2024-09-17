<!--
Affiche les données de books pour chaque book contenu :

titre
nom du livre
-->

@foreach($books as $book) 

{{ $book->title }} de {{ $book->user->name}}

@endforeach