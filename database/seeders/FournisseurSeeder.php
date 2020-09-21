<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use \App\Models\Fournisseur;


class FournisseurSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('fournisseurs')->delete();

        $f = new Fournisseur();
        $f->raison_sociale = "Délivrance";
        $f->adresse = 'Chemin des lilas, Anse';
        $f->mail = 'des-livres-anse@zmail.com';
        $f->telephone = "0215487542";
		$f->save();
    }
}
