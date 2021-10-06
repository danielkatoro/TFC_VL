<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DossierTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('table_dossier')->insert([
            ["nomClient"=>"daniel"],
            ["nomClient"=>"Juliette"],
            ["nomClient"=>"Moise"],
            ["nomClient"=>"Marie Louise"],
            ["nomClient"=>"Augustin"],
            ["nomClient"=>"Rachel"],
            ["nomClient"=>"Eliane"],
            ["nomClient"=>"Keren"],
            ["nomClient"=>"Luc"],
            ["nomClient"=>"Marie Frnace"],
        ]);
    }
}
