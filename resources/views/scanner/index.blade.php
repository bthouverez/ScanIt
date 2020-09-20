@extends('layout')

@section('content')
<div class="container">
	@if($operation == 'inc')
		<h1>Ajout de livre au stock</h1>
	@elseif($operation == 'dec')
		<h1>Suppression de livre au stock</h1>
	@endif

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

	<form autocomplete="off" action="/scanner" method="post" id="scanForm">
		@csrf
		<input autocomplete="off" name="hidden" type="text" style="display:none;">
		<div>
			@if(isset($operation))
				<input type="hidden" name="operation" value="{{ $operation }}">
			@endif
		</div>
		<input type="text" name="isbn_code" id="isbn_code">
	</form>
</div>

<script type="text/javascript">
	var frCharsToNum = [ 'à', '&', 'é', '"', '\'', '(', '-', 'è', '_', 'ç' ];

	var code_input = document.getElementById("isbn_code");
	code_input.focus();
	code_input.placeholder = 'En attente de scan ...';
	code_input.style.background = "lightgreen";
	code_input.style.color = "lightgreen";

	code_input.addEventListener('blur', (event) => {
	  event.target.style.background = 'red';  
	  event.target.placeholder = 'Cliquez ici SVP!';  
	});

	code_input.addEventListener('focus', (event) => {
	  event.target.style.background = 'lightgreen';  
	  event.target.placeholder = 'En attente de scan ...';  
	});

	code_input.addEventListener('input', (event) => {
		code_input.style.color = "black";
		var code = event.target.value;
		var char = code.split('').pop();
		
		if(frCharsToNum.includes(char)) {
			var ncode = code.slice(0, -1) + frCharsToNum.indexOf(char);
			code_input.value = ncode;
		}		
		if(code.length == 13) {
	  		document.getElementById('scanForm').submit();
		}

	});
</script>
@endsection