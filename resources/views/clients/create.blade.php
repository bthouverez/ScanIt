@extends('layout')

@section('content')
<div class="container">

	@if(isset($info_message))
	<section id="info_section" class="alert-success">
		<p>{{ $info_message }}</p>
	</section>
	@endif

	<h1>Création de client</h1>
	<form method="POST" action="/clients">
		@csrf

		<div class="form-group">
			<label for="i_nom">Nom</label>
			<input type="text" class="form-control" id="i_nom" name="nom" required>
		</div>

		<div class="form-group">
			<label for="i_prenom">Prénom</label>
			<input type="text" class="form-control" id="i_prenom" name="prenom" required>
		</div>

		<div class="form-group">
			<label for="i_date_naissance">Date de naissance</label>
			<input type="text" class="form-control" id="i_date_naissance" name="date_naissance">
		</div>

		<div class="form-group">
			<label for="i_adresse">Adresse</label>
			<input type="text" class="form-control" id="i_adresse" name="adresse">
		</div>

		<div class="form-group">
			<label for="i_mail">Mail</label>
			<input type="mail" class="form-control" id="i_mail" name="mail">
		</div>

		<div class="form-group">
			<label for="i_telephone">Téléphone</label>
			<input type="tel" class="form-control" id="i_telephone" name="telephone">
		</div>

		<button class="btn btn-primary">Sauver</button>
	</form>

</div>
@endsection