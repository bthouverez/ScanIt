@extends('layout')

@section('content')
<div class="container">
	<h1>Les livres</h1>
	<a href="/livres/create" class="btn btn-primary">Ajouter une référence</a>

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

		@foreach($livres as $livre)
			<tr>
				<td>{{ $livre->id }}</td>
				<td>{{ $livre->isbn }}</td>		
				<td>{{ $livre->titre }}</td>		
				<td>{{ $livre->editeur }}</td>		
				<td>{{ $livre->annee }}</td>			
				<td>{{ $livre->stock }}</td>		
				<td>
					<a href="/livres/{{ $livre->id }}/edit" class="btn btn-warning">Editer</a>
				</td>
				<td>
					<a href="/livres/{{ $livre->id }}" class="btn btn-primary">Voir</a>
				</td>
			</tr>

		@endforeach

	    
	</table>
	</div>
@endsection