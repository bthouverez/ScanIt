@extends('layout')

@section('content')
<div class="container">
	<h1>Edition de client</h1>
	<form method="POST" action="/clients/{{ $client->id }}" id="editForm">
		@csrf
		@method('PATCH')

		<div class="form-group">
			<label for="i_id">Id</label>
			<input type="text" class="form-control" id="i_id" name="id" value="{{ $client->id }}" disabled>
		</div>


		<div class="form-group">
			<label for="i_nom">Nom</label>
			<input type="text" class="form-control" id="i_nom" name="nom" value="{{ $client->nom }}" required>
		</div>

		<div class="form-group">
			<label for="i_prenom">Prénom</label>
			<input type="text" class="form-control" id="i_prenom" name="prenom" value="{{ $client->prenom }}" required>
		</div>

		<div class="form-group">
			<label for="i_date_naissance">Date de naissance</label>
			<input type="text" class="form-control" id="i_date_naissance" name="date_naissance" value="{{ $client->date_naissance }}">
		</div>

		<div class="form-group">
			<label for="i_adresse">Adresse</label>
			<input type="text" class="form-control" id="i_adresse" name="adresse" value="{{ $client->adresse }}">
		</div>

		<div class="form-group">
			<label for="i_mail">Mail</label>
			<input type="mail" class="form-control" id="i_mail" name="mail" value="{{ $client->mail }}">
		</div>

		<div class="form-group">
			<label for="i_telephone">Téléphone</label>
			<input type="tel" class="form-control" id="i_telephone" name="telephone" value="{{ $client->telephone }}">
		</div>
		
		<button class="btn btn-primary">Sauver</button>
	</form>
	<br>
	<form method="post" action="/clients/{{ $client->id }}">
		{{ csrf_field() }}
		{{ method_field('DELETE') }}
		<button class="btn btn-danger" onclick="clicked();">Supprimer</button>
	</form>

</div>
<script type="text/javascript">
    function clicked() {
       if (confirm('Êtes vous sûr de vouloir supprimer ce client ?')) {
       	document.getElementById('editForm').submit();
       } else {
           return false;
       }
    }

</script>

@endsection