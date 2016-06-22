<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->rememberToken();
            $table->string('location');
            $table->string('profile_photo')->nullable();
            $table->string('profile_url')->nullable();
            $table->string('presentation')->nullable();
            $table->timestamps();
            $table->boolean('admin')->default(false);
            $table->boolean('blocked')->default(false);

            $table->integer('sells_evals')->default(0);
            $table->integer('sells_count')->default(0);
            $table->integer('buys_evals')->default(0);
            $table->integer('buys_count')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('users');
    }
}
