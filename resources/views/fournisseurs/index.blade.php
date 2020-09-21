@extends('layout')

@section('content')
<div class="container">
	<h1>Les fournisseurs</h1>
	<a href="/fournisseurs/create" class="btn btn-primary">Ajouter un fournisseur</a>

	<table class="table">
		<tr>
			<th>ID</th>
        	<th>Raison sociale</th>
        	<th>Adresse</th>
        	<th>Mail</th>
        	<th>Téléphone</th>
        	<th></th>
        	<th></th>
		</tr>

		@foreach($fournisseurs as $fournisseur)
			<tr>
		        <td>
		        	{{ $fournisseur->id }} 
		        </td>

		        <td>
		        	{{ $fournisseur->raison_sociale }} 
		        </td>

		        <td>
		        	{{ $fournisseur->adresse }} 
		        </td>

		        <td>
		        	{{ $fournisseur->mail }} 
		        </td>

		        <td>
		        	{{ $fournisseur->telephone }} 
		        </td>

				<td>
					<a href="/fournisseurs/{{ $fournisseur->id }}/edit" class="btn btn-warning">Editer</a>
				</td>
				<td>
					<a href="/fournisseurs/{{ $fournisseur->id }}" class="btn btn-primary">Voir</a>
				</td>
			</tr>

		@endforeach

	    
	</table>
	</div>
@endsection