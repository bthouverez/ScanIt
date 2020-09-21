@extends('layout')

@section('content')
<div class="container">
	<h1>Le client n°{{ $client->id }}</h1>
	<ul>
        <li>{{ $client->nom }} </li>
        <li>{{ $client->prenom }} </li>
        <li>{{ $client->date_naissance }} </li>
        <li>{{ $client->adresse }} </li>
        <li>{{ $client->mail }} </li>
        <li>{{ $client->telephone }} </li>
	</ul>
	
	<a href="/clients/{{ $client->id }}/edit" class="btn btn-warning">Editer</a>
	
			
</div>
@endsection