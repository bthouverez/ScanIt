<?php

namespace App\Http\Controllers;

use App\Models\Livre;
use Illuminate\Http\Request;

class LivreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $livres = Livre::all();
        return view('livres.index', compact('livres'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('livres.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Livre::create([
            'isbn' => $request->isbn,
            'titre' => $request->titre,
            'editeur' => $request->editeur,
            'annee' => $request->annee
        ]);
        if(isset($request->fromScan)) {
            $info_message = 'Livre stocké, stock actuel : 1';
            $operation = 'inc';
            return view('scanner.index', compact('operation'), compact('info_message'));
        }
        return redirect('/livres');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Livre  $livre
     * @return \Illuminate\Http\Response
     */
    public function show(Livre $livre)
    {
        return view('livres.show', compact('livre'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Livre  $Livre
     * @return \Illuminate\Http\Response
     */
    public function edit(Livre $livre)
    {
        return view('livres.edit', compact('livre'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Livre  $Livre
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Livre $livre)
    {
        $livre->update([
            'isbn' => $request->isbn,
            'titre' => $request->titre,
            'editeur' => $request->editeur,
            'annee' => $request->annee
        ]);
        return redirect('/livres/'.$livre->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Livre  $Livre
     * @return \Illuminate\Http\Response
     */
    public function destroy(Livre $livre)
    {
        $livre->delete();
        return redirect('/livres');
    }
}
