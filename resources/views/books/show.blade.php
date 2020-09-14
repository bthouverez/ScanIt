@extends('layout')

@section('content')
<div class="container">
	<h1>Le livre n°{{ $book->id }}</h1>
	<h2>{{ $book->titre }}</h2>
	<ul>
		<li>{{ $book->isbn }}</li>
		<li>{{ $book->editeur }}</li>
		<li>{{ $book->annee }}</li>
	</ul>
	
	<a href="/books/{{ $book->id }}/edit" class="btn btn-warning">Editer</a>
	
			
</div>
@endsection