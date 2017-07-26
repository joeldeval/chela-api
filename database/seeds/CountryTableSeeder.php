<?php

use Illuminate\Database\Seeder;

class CountryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('country')->insert([
            'name' => 'ALEMANIA'
        ]);

        DB::table('country')->insert([
            'name' => 'MEXICO'
        ]);

        DB::table('country')->insert([
            'name' => 'EUA'
        ]);

        DB::table('country')->insert([
            'name' => 'HOLANDA'
        ]);

        DB::table('country')->insert([
            'name' => 'JAPON'
        ]);

        DB::table('country')->insert([
            'name' => 'BELGICA'
        ]);

        DB::table('country')->insert([
            'name' => 'AUSTRALIA'
        ]);
    }
}
