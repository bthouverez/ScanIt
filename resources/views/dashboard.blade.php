@extends('layout')

@section('title', 'Dashboard')

@section('content')
<div class="container">
	<section>
		<h1>ScanIt - gestion de stock et de commandes de livres</h1>
		<table class="table table-sm table-striped">
			<tr>
				<td>Nombre de références enregistrées</td>
				<td>{{ $livres->count() }}</td>
			</tr>
			<tr>
				<td>Stock total de livres</td>
				<td>{{ $livres->map->stock->sum() }}</td>
			</tr>
			<tr>
				<td>Nombre de commandes passées</td>
				<td>{{ $commandes->count() }}</td>
			</tr>
			<tr>
				<td>Nombre de clients enregistrés</td>
				<td>{{ $clients->count() }}</td>
			</tr>
			<tr>
				<td>Nombre de fournisseurs enregistrés</td>
				<td>{{ $fournisseurs->count() }}</td>
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
