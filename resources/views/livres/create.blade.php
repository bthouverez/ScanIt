@extends('layout')

@section('content')
<div class="container">

	@if(isset($info_message))
	<section id="info_section" class="alert-success">
		<p>{{ $info_message }}</p>
	</section>
	@endif

	<h1>Création de livre</h1>
	<form method="POST" action="/livres">
		@csrf

		<div class="form-group">
			<label for="i_isbn">ISBN</label>
				<input type="text" class="form-control" id="i_isbn" name="isbn" 
				{!! isset($isbn) ? "value=\"$isbn\" readonly" : ''!!} required>
		</div>

		<div class="form-group">
			<label for="i_titre">Titre</label>
			<input type="text" class="form-control" id="i_titre" name="titre" required>
		</div>

		<div class="form-group">
			<label for="i_editeur">Editeur</label>
			<input type="text" class="form-control" id="i_editeur" name="editeur" required>
		</div>

		<div class="form-group">
			<label for="i_annee">Année</label>
			<input type="text" class="form-control" id="i_annee" name="annee" required>
		</div>

		@if(isset($isbn))
			<input type="hidden" name="fromScan" value="yes">
		@endif
		
		<button class="btn btn-primary">Sauver</button>
	</form>

</div>
@endsection