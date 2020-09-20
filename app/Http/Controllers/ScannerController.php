<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Livre;

class ScannerController extends Controller
{

	public function index(Request $request)
	{
		if(isset($request->operation)) {
			$operation = $request->operation;
			return view('scanner.index', compact('operation'));
		}
		return redirect('/');
	}

	public function manageScan(Request $request)
	{

		$isbn = $request->isbn_code;
		$livre = Livre::where('isbn', $isbn)->first();
		$operation = $request->operation;
		if($operation == 'inc') {
			// incrémentation des livres
			if($livre) {
				$livre->stock++;
				$livre->save();
				$info_message = 'Livre stocké, stock actuel : '.$livre->stock;
				return view('scanner.index', compact('operation'), compact('info_message'));
			} else {
				$info_message = 'Livre inconnu : création nécessaire';
				//dd($request);
				return view('livres.create', compact('isbn'), compact('info_message'));
			}
		} else if ($operation == 'dec') {
			// décrémentation des livres
			if($livre) {
				if($livre->stock > 0) {
					$livre->stock--;
					$livre->save();
					$info_message = 'Livre déstocké, stock actuel : '.$livre->stock;
					return view('scanner.index', compact('operation'), compact('info_message'));
				} else {
					# ERREUR, plus de stock
					$error_message = 'Impossible à supprimer : stock épuisé';
					return view('scanner.index', compact('operation'), compact('error_message'));
				}
			} else {
				# ERREUR, impossible de supprimer un livre inexistant
				$error_message = 'Impossible à supprimer : livre inconnu';
				return view('scanner.index', compact('operation'), compact('error_message'));
			}

		}
	}
}
