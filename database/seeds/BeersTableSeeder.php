<?php

use Illuminate\Database\Seeder;

class BeersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('beers')->insert([
            'id_type' => 2,
            'id_type_concentrate' => 1,
            'id_brand' => 2,
            'id_country' => 4,
            'name' => 'HEINEKEN',
            'color' => 'clara'
        ]);

        DB::table('beers')->insert([
            'id_type' => 4,
            'id_type_concentrate' => 2,
            'id_brand' => 1,
            'id_country' => 1,
            'name' => 'ERDINGER',
            'color' => 'clara'
        ]);
    }
}
