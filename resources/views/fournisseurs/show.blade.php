@extends('layout')

@section('content')
<div class="container">
	<h1>Le fournisseur n°{{ $fournisseur->id }}</h1>
	<ul>
        <li>{{ $fournisseur->raison_sociale }} </li>
        <li>{{ $fournisseur->adresse }} </li>
        <li>{{ $fournisseur->mail }} </li>
        <li>{{ $fournisseur->telephone }} </li>
	</ul>
	
	<a href="/clients/{{ $fournisseur->id }}/edit" class="btn btn-warning">Editer</a>
	
			
</div>
@endsection