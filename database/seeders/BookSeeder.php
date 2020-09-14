<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use \App\Models\Book;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('books')->delete();

        $b = new Book();
		$b->isbn = '9782047321089';
		$b->titre = 'Maths Terminale S';
		$b->editeur = 'Bordas';
		$b->annee = 2006;
		$b->save();

        $b = new Book();
		$b->isbn = '9782206085074';
		$b->titre = 'Philosophie Terminales L, ES, S';
		$b->editeur = 'Delagrave';
		$b->annee = 2003;
		$b->save();

        $b = new Book();
		$b->isbn = '9782701131405';
		$b->titre = 'Chimie Term S';
		$b->editeur = 'Belin';
		$b->annee = 2002;
		$b->save();

        $b = new Book();
		$b->isbn = '9782701131382';
		$b->titre = 'Physique Term S';
		$b->editeur = 'Belin';
		$b->annee = 2002;
		$b->save();
    }
}
