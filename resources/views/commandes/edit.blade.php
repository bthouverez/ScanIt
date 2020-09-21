@extends('layout')

@section('content')
<div class="container">
	<h1>Edition de livre</h1>
	<form method="POST" action="/livres/{{ $livre->id }}" id="editForm">
		@csrf
		@method('PATCH')

		<div class="form-group">
			<label for="i_id">Id</label>
			<input type="text" class="form-control" id="i_id" name="id" value="{{ $livre->id }}" disabled>
		</div>

		<div class="form-group">
			<label for="i_isbn">ISBN</label>
			<input type="text" class="form-control" id="i_isbn" name="isbn" value="{{ $livre->isbn }}">
		</div>

		<div class="form-group">
			<label for="i_titre">Titre</label>
			<input type="text" class="form-control" id="i_titre" name="titre" value="{{ $livre->titre }}">
		</div>

		<div class="form-group">
			<label for="i_editeur">Editeur</label>
			<input type="text" class="form-control" id="i_editeur" name="editeur" value="{{ $livre->editeur }}">
		</div>

		<div class="form-group">
			<label for="i_annee">Année</label>
			<input type="text" class="form-control" id="i_annee" name="annee" value="{{ $livre->annee }}">
		</div>
		
		<button class="btn btn-primary">Sauver</button>
	</form>
	<br>
	<form method="post" action="/livres/{{ $livre->id }}">
		{{ csrf_field() }}
		{{ method_field('DELETE') }}
		<button class="btn btn-danger" onclick="clicked();">Supprimer</button>
	</form>

</div>
<script type="text/javascript">
    function clicked() {
       if (confirm('Êtes vous sûr de vouloir supprimer ce livre ?')) {
       	document.getElementById('editForm').submit();
       } else {
           return false;
       }
    }

</script>

@endsection