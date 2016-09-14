<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class PetOwners extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('pet_owners', function (Blueprint $table) {

            $table->integer('pet_id')->unsigned();
            $table->foreign('pet_id')->references('id')->on('pets');

            $table->integer('owner_id')->unsigned();
            $table->foreign('owner_id')->references('id')->on('owners');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('pet_owners');
    }
}
