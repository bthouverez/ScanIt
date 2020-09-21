@extends('layout')

@section('content')
<div class="container">
	<h1>Le livre n°{{ $livre->id }}</h1>
	<h2>{{ $livre->titre }}</h2>
	<ul>
		<li>{{ $livre->isbn }}</li>
		<li>{{ $livre->editeur }}</li>
		<li>{{ $livre->annee }}</li>
	</ul>
	
	<a href="/books/{{ $livre->id }}/edit" class="btn btn-warning">Editer</a>
	
			
</div>
@endsection