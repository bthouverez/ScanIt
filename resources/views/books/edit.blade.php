@extends('layout')

@section('content')
<div class="container">
	<h1>Edition de livre</h1>
	<form method="POST" action="/books/{{ $book->id }}">
		@csrf
		@method('PATCH')

		<div class="form-group">
			<label for="i_id">Id</label>
			<input type="text" class="form-control" id="i_id" name="id" value="{{ $book->id }}" disabled>
		</div>

		<div class="form-group">
			<label for="i_isbn">ISBN</label>
			<input type="text" class="form-control" id="i_isbn" name="isbn" value="{{ $book->isbn }}">
		</div>

		<div class="form-group">
			<label for="i_titre">Titre</label>
			<input type="text" class="form-control" id="i_titre" name="titre" value="{{ $book->titre }}">
		</div>

		<div class="form-group">
			<label for="i_editeur">Editeur</label>
			<input type="text" class="form-control" id="i_editeur" name="editeur" value="{{ $book->editeur }}">
		</div>

		<div class="form-group">
			<label for="i_annee">Année</label>
			<input type="text" class="form-control" id="i_annee" name="annee" value="{{ $book->annee }}">
		</div>
		
		<button class="btn btn-primary">Sauver</button>
	</form>
	<br>
	<form method="post" action="/books/{{ $book->id }}">
		{{ csrf_field() }}
		{{ method_field('DELETE') }}
		<button class="btn btn-danger">Supprimer</button>
	</form>

</div>
@endsection