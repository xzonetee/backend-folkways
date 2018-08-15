<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHomestaysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('homestays', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->text('price');
            $table->text('activity');
            $table->text('nearby');
            $table->text('nametel');
            $table->text('tel');
            $table->text('email');
            $table->text('website');
            $table->string('image1');
            $table->string('image2');

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
        Schema::dropIfExists('homestays');
    }
}
