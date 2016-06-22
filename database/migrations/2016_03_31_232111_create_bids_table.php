<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBidsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bids', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();

            $table->integer('price_cents')->nullable();
            $table->string('trade_prefs')->nullable();
            // e.g. 3Kg, 1liter, 2boxes, etc.
            $table->string('quantity');
            $table->string('trade_location');

            $table->string('comment');

            $table->integer('advertisement_id')->unsigned();
            $table->foreign('advertisement_id')->references('id')->on('advertisements');

            $table->integer('buyer_id')->unsigned();
            $table->foreign('buyer_id')->references('id')->on('users');

            // 0 Canceled ; 1 Pending ; 2 Refused ; 3 Accepted
            $table->tinyInteger('status')->default(1);

            $table->tinyInteger('buyer_eval')->nullable();
            $table->tinyInteger('seller_eval')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('bids');
    }
}
