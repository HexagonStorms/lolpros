<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class EssentialTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lol_players', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('team_id')->unsigned();
            $table->integer('position_id')->unsigned();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('twitch_username');
            $table->boolean('retired')->default(0);
            $table->dateTime('last_online');
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('lol_teams', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('acronym');
            $table->integer('region_id')->unsigned();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lol_players');
        Schema::dropIfExists('lol_teams');
    }
}
