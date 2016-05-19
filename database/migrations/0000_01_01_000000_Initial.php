<?php

use Illuminate\Database\Migrations\Migration;
use Neomerx\LimoncelloIlluminate\Database\Migrations\Runner;

/**
 * @package App
 */
class Initial extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     *
     * @SuppressWarnings(PHPMD.ShortMethodName)
     */
    public function up()
    {
        Runner::apply();

//        Schema::create('idvchecks', function (Blueprint $table) {
//            $table->increments('id');
//            $table->unsignedInteger('user_id');
//            $table->string('endpoint');
//            $table->timestamps();
//
//            $table->foreign('user_id')->references('id')->on('users');
//
//        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Runner::rollback();

//        Schema::drop('idvchecks');
    }
}
