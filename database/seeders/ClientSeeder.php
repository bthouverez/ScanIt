<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use \App\Models\Client;

class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('clients')->delete();

        $c = new Client();
        $c->nom = 'thouverez';
        $c->prenom = 'bastien';
        $c->date_naissance = '1990-07-31';
        #$c->adresse = '35 ch de l''étang dent, 01390 Civrieux';
        $c->mail = 'bastien.thouverez@gmail.com';
        #$c->telephone = '0665419719';
		$c->save();

        $c = new Client();
        $c->nom = 'leer';
        $c->prenom = 'jaime';
        $c->date_naissance = '1965-01-02';
        #$c->adresse = '35 ch de l''étang dent, 01390 Civrieux';
        $c->mail = 'jaime.leer@lovebook.com';
        #$c->telephone = '0665419719';
		$c->save();
    }
}
