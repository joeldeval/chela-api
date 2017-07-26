<?php

use Illuminate\Database\Seeder;

class TypesBeersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('types_beers')->insert([
            'name' => 'ALE'
        ]);

        DB::table('types_beers')->insert([
            'name' => 'LAGER'
        ]);

         DB::table('types_beers')->insert([
            'name' => 'LAMBIC'
        ]);

         DB::table('types_beers')->insert([
            'name' => 'ARTESANAL'
        ]);
    }
}
