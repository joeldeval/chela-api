<?php

use Illuminate\Database\Seeder;

class BrandsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('brands')->insert([
            'name' => 'ERDINGER'
        ]);

        DB::table('brands')->insert([
            'name' => 'HEINEKEN'
        ]);
        DB::table('brands')->insert([
            'name' => 'CORONA'
        ]);
    }
}
