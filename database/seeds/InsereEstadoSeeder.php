<?php

use Illuminate\Database\Seeder;

class InsereEstadoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Estado::create([
        	'nome' => 'Parana',
        	'sigla' => 'PR'
        ]);

    }
}
