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
            'name' => 'ERDINGER',
            'img' => 'http://localhost:8001/img/erdinger/logo.png'
        ]);

        DB::table('brands')->insert([
            'name' => 'HEINEKEN',
            'img' => 'http://localhost:8001/img/heineken/logo.png'
        ]);
        DB::table('brands')->insert([
            'name' => 'CORONA'
        ]);
    }
}
