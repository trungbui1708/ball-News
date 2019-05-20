<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRanksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ranks', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('number_match');
            $table->integer('won');
            $table->integer('lost');
            $table->integer('draw');
            $table->integer('goals_for');
            $table->integer('goals_against');
            $table->integer('goals_difference');
            $table->unsignedInteger('tournament_id');
            $table->foreign('tournament_id')->references('id')->on('tournaments');
            $table->unsignedInteger('clubs_id');
            $table->foreign('clubs_id')->references('id')->on('clubs');
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
        Schema::dropIfExists('ranks');
    }
}
