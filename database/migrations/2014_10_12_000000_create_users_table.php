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
            $table->unsignedInteger('account_id');


            $table->string('firstname');
            $table->string('surname');
            $table->string('email')->unique();

            $table->date('dob');
            $table->string('building');
            $table->string('street');
            $table->string('2_address');
            $table->string('town');
            $table->string('postcode');
            $table->string('driving_license');
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();

            $table->foreign('account_id')->references('id')->on('accounts');

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
