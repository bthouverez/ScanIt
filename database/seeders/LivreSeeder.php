<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use \App\Models\Livre;

class LivreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('livres')->delete();

        $l = new Livre();
		$l->isbn = '9782047321089';
		$l->titre = 'Maths Terminale S';
		$l->editeur = 'Bordas';
		$l->annee = 2006;
		$l->save();

        $l = new Livre();
		$l->isbn = '9782206085074';
		$l->titre = 'Philosophie Terminales L, ES, S';
		$l->editeur = 'Delagrave';
		$l->annee = 2003;
		$l->save();

        $l = new Livre();
		$l->isbn = '9782701131405';
		$l->titre = 'Chimie Term S';
		$l->editeur = 'Belin';
		$l->annee = 2002;
		$l->save();

        $l = new Livre();
		$l->isbn = '9782701131382';
		$l->titre = 'Physique Term S';
		$l->editeur = 'Belin';
		$l->annee = 2002;
		$l->save();
    }
}
