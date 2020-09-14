<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Book;

class ScannerController extends Controller
{
	public function index()
	{
		return view('scanner.index');
	}

	public function manageScan(Request $request)
	{

		$isbn = $request->isbn_code;
		$book = Book::where('isbn', $isbn)->first();
		$operation = $request->operation;
		if($operation == 'increment') {
			// incrémentation des livres
			if($book) {
				$book->stock++;
				$book->save();
				$info_message = 'Livre stocké, stock actuel : '.$book->stock;
				return view('scanner.index', compact('request->operation'), compact('info_message'));
			} else {
				$info_message = 'Livre inconnu : création nécessaire';
				return view('books.create', compact('isbn'), compact('info_message'));
			}
		} else if ($operation == 'decrement') {
			// décrémentation des livres
			if($book) {
				if($book->stock > 0) {
					$book->stock--;
					$book->save();
					$info_message = 'Livre déstocké, stock actuel : '.$book->stock;
					return view('scanner.index', compact('request->operation'), compact('info_message'));
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
