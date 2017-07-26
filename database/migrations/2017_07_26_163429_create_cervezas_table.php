<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCervezasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
        Schema::create('types_beers', function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('name');
            $table->timestamps();
        });

        Schema::create('types_concentrate', function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('name');
            $table->timestamps();
        });

        Schema::create('brands', function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('name');
            $table->string('img');
            $table->timestamps();
        });

        Schema::create('country', function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('name');
            $table->string('img');
            $table->timestamps();
        });

        Schema::create('beers', function(Blueprint $table)
        {
            $table->increments('id');
            $table->integer('id_type')->unsigned();
            $table->integer('id_type_concentrate')->unsigned();
            $table->integer('id_brand')->unsigned();
            $table->integer('id_country')->unsigned();
            $table->string('name');
            $table->string('color');
            $table->string('img');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
