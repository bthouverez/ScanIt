@extends('layout')

@section('content')
<div class="container">
	<h1>Edition de fournisseur</h1>
	<form method="POST" action="/fournisseurs/{{ $fournisseur->id }}" id="editForm">
		@csrf
		@method('PATCH')

		<div class="form-group">
			<label for="i_id">Id</label>
			<input type="text" class="form-control" id="i_id" name="id" value="{{ $fournisseur->id }}" disabled>
		</div>


		<div class="form-group">
			<label for="i_raison_sociale">Raison sociale</label>
			<input type="text" class="form-control" id="i_raison_sociale" name="raison_sociale" value="{{ $fournisseur->raison_sociale }}" required>
		</div>

		<div class="form-group">
			<label for="i_adresse">Adresse</label>
			<input type="text" class="form-control" id="i_adresse" name="adresse" value="{{ $fournisseur->adresse }}">
		</div>

		<div class="form-group">
			<label for="i_mail">Mail</label>
			<input type="mail" class="form-control" id="i_mail" name="mail" value="{{ $fournisseur->mail }}">
		</div>

		<div class="form-group">
			<label for="i_telephone">Téléphone</label>
			<input type="tel" class="form-control" id="i_telephone" name="telephone" value="{{ $fournisseur->telephone }}">
		</div>
		
		<button class="btn btn-primary">Sauver</button>
	</form>
	<br>
	<form method="post" action="/fournisseurs/{{ $fournisseur->id }}">
		{{ csrf_field() }}
		{{ method_field('DELETE') }}
		<button class="btn btn-danger" onclick="clicked();">Supprimer</button>
	</form>

</div>
<script type="text/javascript">
    function clicked() {
       if (confirm('Êtes vous sûr de vouloir supprimer ce fournisseur ?')) {
       	document.getElementById('editForm').submit();
       } else {
           return false;
       }
    }

</script>

@endsection