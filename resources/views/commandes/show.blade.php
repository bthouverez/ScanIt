@extends('layout')

@section('content')
<div class="container">
	<h1>Commande n°{{ $commande->id }}</h1>
	<ul>
		<li>Date de commande : {{ $commande->date }}</li>
		<li>Références commandées : {{ $commande->livres->count() }}</li>
		<li>Stock total commandé : {{ $commande->livres->map->pivot->map->quantite->sum() }}</li>
	</ul>
	<p></p>

	<h2>Détail des livres commandés</h2>
	<table class="table table-sm">
		<tr>
			<th>ISBN</th>
			<th>Titre</th>
			<th>Niveau</th>
			<th>Quantité</th>
		</tr>

		@foreach($commande->livres as $livre)
			<tr>
				<td>{{ $livre->isbn }}</td>		
				<td>{{ $livre->titre }}</td>		
				<td>{{ $livre->niveau }}</td>		
				<td>{{ $livre->pivot->quantite }}</td>		
			</tr>

		@endforeach

	    
	</table>
	
	<a href="/books/{{ $commande->id }}/edit" class="btn btn-warning">Editer</a>
	
			
</div>
@endsection