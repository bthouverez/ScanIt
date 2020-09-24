@extends('layout')

@section('content')
<div class="container">
	<h1>Les commandes</h1>
	<a href="/commandes/create" class="btn btn-primary">Ajouter une référence</a>

	<table class="table">
		<tr>
			<th>ID</th>
			<th>Date</th>
			<th>Fournisseur</th>
			<th>Client</th>
			<th></th>
			<th></th>
		</tr>

		@foreach($commandes as $commande)
			<tr>
				<td>{{ $commande->id }}</td>
				<td>{{ $commande->date }}</td>		
				<td>{{ $commande->fournisseur->raison_sociale }}</td>		
				<td>{{ $commande->client->nom }}</td>		
				<td>
					<a href="/commandes/{{ $commande->id }}/edit" class="btn btn-warning">Editer</a>
				</td>
				<td>
					<a href="/commandes/{{ $commande->id }}" class="btn btn-primary">Voir</a>
				</td>
			</tr>

		@endforeach

	    
	</table>
	</div>
@endsection