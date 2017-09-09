<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use App\Team;

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
            $table->integer('team')->unsigned();
            $table->integer('position')->unsigned();
            $table->string('handle');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('birthplace')->nullable();
            $table->string('twitch_username')->nullable();
            $table->string('image')->nullable();
            $table->boolean('sub')->default(0);
            $table->boolean('retired')->default(0);
            $table->dateTime('last_online')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('teams', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('acronym');
            $table->string('logo')->nullable();
            $table->integer('region')->unsigned();
            $table->timestamps();
            $table->softDeletes();
        });
        
        // Insert Data
        
        // Teams
        
        $teams = [
            [
                'acronym' => 'TSM',
                'name' => 'Team Solo Mid',
                'logo' => '',
                'region' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'acronym' => 'IMT',
                'name' => 'Immortals',
                'logo' => '',
                'region' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ]
        ];
        Team::insert($teams);
        
        // Players
        // $players = [
        //     [
        //         'handle' => '',
        //         'position' => '',
        //         'first_name' => '',
        //         'last_name' => '',
        //         'birthplace' => '',
        //         'twitch_username' => '',
        //         'team' => '',
        //         'image' => '',
        //         'sub' => 0,
        //         'retired' => 0,
        //     ],
            
        // ];
        
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
