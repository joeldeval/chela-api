<?php

use Illuminate\Database\Seeder;

class TypesConcentrateTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('types_concentrate')->insert([
            'name' => 'ALTA'
        ]);

        DB::table('types_concentrate')->insert([
            'name' => 'BAJA'
        ]);
    }
}
