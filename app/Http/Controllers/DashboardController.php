<?php

namespace App\Http\Controllers;

use App\Models\Livre;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
	public function index()
	{
        $livres = Livre::all();
		return view('dashboard', compact('livres'));
	}
}
