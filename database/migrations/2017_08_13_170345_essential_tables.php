<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use App\Team;
use App\Player;

class EssentialTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('players', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('team_id')->unsigned();
            $table->integer('position')->unsigned();
            $table->string('handle');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('birthplace')->nullable();
            $table->string('twitch_username')->nullable();
            $table->integer('twitch_user_id')->nullable();
            $table->string('image')->nullable();
            $table->boolean('sub')->default(0);
            $table->boolean('retired')->default(0);
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('teams', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('acronym');
            $table->string('logo')->nullable();
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
        Schema::dropIfExists('players');
        Schema::dropIfExists('teams');
    }
}
