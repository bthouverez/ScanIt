<?php

namespace App\Http\Controllers;

use App\Models\Livre;
use App\Models\Commande;
use App\Models\Client;
use App\Models\Fournisseur;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
	public function index()
	{
        $livres = Livre::all();
        $commandes = Commande::all();
        $fournisseurs = Fournisseur::all();
        $clients = Client::all();
		return view('dashboard', 
			[
				'livres' => $livres,
				'commandes' => $commandes,
				'fournisseurs' => $fournisseurs,
				'clients' => $clients,
			]);
	}
}
