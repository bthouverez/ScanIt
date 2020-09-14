@extends('layout')

@section('content')
<div class="container">
	<h1>Scanner</h1>

	@if(isset($error_message))
	<section id="error_section" class="alert-danger">
		<p>{{ $error_message }}</p>
	</section>
	@endif

	@if(isset($info_message))
	<section id="info_section" class="alert-success">
		<p>{{ $info_message }}</p>
	</section>
	@endif

	<p>En attente de scan</p>
	<form action="/scanner" method="post">
		@csrf
		<input type="number" name="isbn_code">
		<div>
			<input type="radio" id="radioInc"
			name="operation" value="increment" 
			{{ isset($operation) && $operation == 'increment' ? 'checked' : '' }}
			{{ !isset($operation) ? 'checked' : '' }}>
			<label for="radioInc">Incrémente</label>

			<input type="radio" id="radioDec"
			name="operation" value="decrement" 
			{{ isset($operation) && $operation == 'decrement' ? 'checked' : '' }}>
			<label for="radioDec">Decrémente</label>
		</div>

		<button>Envoyer</button>
	</form>
</div>
@endsection