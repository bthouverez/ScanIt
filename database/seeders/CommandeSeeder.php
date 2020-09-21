<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use \App\Models\Commande;

class CommandeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        \DB::table('commandes')->delete();
        \DB::table('lot_commandes')->delete();

        $c = new Commande();
        $c->date = '2020-01-13';
        $c->client_id = 1;
        $c->fournisseur_id = 1;
		$c->save();

		\DB::table('lot_commandes')->insert([
		    ['commande_id' => 1, 'livre_id' => 1, 'quantite' => 2],
		]);
    }
}
