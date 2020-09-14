@extends('layout')

@section('content')
<div class="container">
	<h1>Les livres</h1>
	<a href="/books/create" class="btn btn-primary">Créer</a>

	<table class="table">
		<tr>
			<th>ID</th>
			<th>ISBN</th>
			<th>Titre</th>
			<th>Editeur</th>
			<th>Année</th>
			<th>Stock</th>
			<th>Editer</th>
			<th>Voir</th>
		</tr>

		@foreach($books as $book)
			<tr>
				<td>{{ $book->id }}</td>
				<td>{{ $book->isbn }}</td>		
				<td>{{ $book->titre }}</td>		
				<td>{{ $book->editeur }}</td>		
				<td>{{ $book->annee }}</td>			
				<td>{{ $book->stock }}</td>		
				<td>
					<a href="/books/{{ $book->id }}/edit" class="btn btn-warning">Editer</a>
				</td>
				<td>
					<a href="/books/{{ $book->id }}" class="btn btn-primary">Voir</a>
				</td>
			</tr>

		@endforeach

	    
	</table>
	</div>
@endsection