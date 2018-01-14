<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use App\Region;

class RegionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('regions', function(Blueprint $table) {
            $table->increments('id');
            $table->string('acronym', 10);
            $table->string('name', 75);
            $table->string('region', 50);
            $table->string('location', 50);
        });

        $regions = [
    		[
    			'id' => 1,
    			'acronym' => 'N/A',
    			'name' => 'Not Applicable',
    			'region' => 'N/A',
    			'location' => 'N/A'
    		],
    		[
    			'id' => 2,
    			'acronym' => 'NA LCS',
    			'name' => 'League of Legends Championship Series',
    			'region' => 'North America',
    			'location' => 'Los Angeles'
    		],
    		[
    			'id' => 3,
    			'acronym' => 'EU LCS',
    			'name' => 'League of Legends Championship Series',
    			'region' => 'Europe',
    			'location' => 'Berlin'
    		],
    		[
    			'id' => 4,
    			'acronym' => 'LCK',
    			'name' => 'League of Legends Champions Korea',
    			'region' => 'South Korea',
    			'location' => 'Seoul'
    		],
    		[
    			'id' => 5,
    			'acronym' => 'LPL',
    			'name' => 'League of Legends Pro League',
    			'region' => 'China',
    			'location' => 'Shanghai'
    		],
    		[
    			'id' => 6,
    			'acronym' => 'LMS',
    			'name' => 'League of Legends Masters Series',
    			'region' => 'Taiwan',
    			'location' => 'Taipei'
    		],
    		[
    			'id' => 7,
    			'acronym' => 'GPL',
    			'name' => 'Garena Premier League',
    			'region' => 'Southeast Asia',
    			'location' => 'various'
    		],
    		[
    			'id' => 8,
    			'acronym' => 'CBLoL',
    			'name' => 'Campeonato Brasileiro de League of Legends',
    			'region' => 'Brazil',
    			'location' => 'São Paulo'
    		],
    		[
    			'id' => 9,
    			'acronym' => 'LLN',
    			'name' => 'Latin America Cup North',
    			'region' => 'Latin America North',
    			'location' => 'Mexico'
    		],
    		[
    			'id' => 10,
    			'acronym' => 'CLS',
    			'name' => 'Latin America Cup South',
    			'region' => 'Latin America South',
    			'location' => 'Latin America'
    		],
    		[
    			'id' => 11,
    			'acronym' => 'LJL',
    			'name' => 'League of Legends Japan League',
    			'region' => 'Japan',
    			'location' => 'Tokyo'
    		],
    		[
    			'id' => 12,
    			'acronym' => 'TCL',
    			'name' => 'Turkey Champions League',
    			'region' => 'Turkey',
    			'location' => 'Instanbul'
    		],
    		[
    			'id' => 13,
    			'acronym' => 'LCL',
    			'name' => 'League of Legends Continental League',
    			'region' => 'CIS',
    			'location' => 'Moscow'
    		],
    		[
    			'id' => 14,
    			'acronym' => 'OPL',
    			'name' => 'Oceanic Pro League',
    			'region' => 'Oceania',
    			'location' => 'Sydney'
    		],
    	];
        Region::insert($regions);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('regions');
    }
}
