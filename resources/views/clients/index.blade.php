@extends('layout')

@section('content')
<div class="container">
	<h1>Les clients</h1>
	<a href="/clients/create" class="btn btn-primary">Ajouter un client</a>

	<table class="table">
		<tr>
			<th>ID</th>
        	<th>Nom</th>
        	<th>Prénom</th>
        	<th>Date de naissance</th>
        	<th>Adresse</th>
        	<th>Mail</th>
        	<th>Téléphone</th>
        	<th></th>
        	<th></th>
		</tr>

		@foreach($clients as $client)
			<tr>
		        <td>
		        	{{ $client->id }} 
		        </td>

		        <td>
		        	{{ $client->nom }} 
		        </td>

		        <td>
		        	{{ $client->prenom }} 
		        </td>

		        <td>
		        	{{ $client->date_naissance }} 
		        </td>

		        <td>
		        	{{ $client->adresse }} 
		        </td>

		        <td>
		        	{{ $client->mail }} 
		        </td>

		        <td>
		        	{{ $client->telephone }} 
		        </td>

				<td>
					<a href="/clients/{{ $client->id }}/edit" class="btn btn-warning">Editer</a>
				</td>
				<td>
					<a href="/clients/{{ $client->id }}" class="btn btn-primary">Voir</a>
				</td>
			</tr>

		@endforeach

	    
	</table>
	</div>
@endsection