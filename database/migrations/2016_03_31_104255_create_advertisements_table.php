<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdvertisementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('advertisements', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('owner_id')->unsigned();
            $table->string('name');

            $table->string('description')->nullable();
            $table->timestamp('available_on');

            // Para o produto deixar de ficar disponível colocar
            // a data atual em available until
            $table->timestamp('available_until')->nullable();
            $table->integer('price_cents')->nullable();
            $table->string('trade_prefs')->nullable();

            // e.g. 3Kg, 1liter, 2boxes, etc.
            $table->string('quantity');

            // Multimedia content, including
            // Photos, Youtube URLs or links to external pages

            // Tags

            $table->boolean('blocked')->default(false);
            $table->timestamps();

            $table->foreign('owner_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('advertisements');
    }
}
