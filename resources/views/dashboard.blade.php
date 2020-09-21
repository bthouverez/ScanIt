@extends('layout')

@section('title', 'Dashboard')

@section('content')
<div class="container">
	<section>
		<h1>ScanIt - gestion de stock et de commandes de livres</h1>
		<table class="table table-sm table-striped">
			<tr>
				<td>Références enregistrées</td>
				<td>{{ $livres->count() }}</td>
			</tr>
			<tr>
				<td>Stock total</td>
				<td>{{ $livres->map->stock->sum() }}</td>
			</tr>
		</table>
	</section>

	<section>
		<h2>Scanner</h2>
		<ul>
			<li><a href="/scanner?operation=inc">Stocker des livres</a></li>
			<li><a href="/scanner?operation=dec">Retirer des livres</a></li>
		</ul>	
	</section>
</div>
@endsection
