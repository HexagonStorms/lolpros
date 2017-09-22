<?php

namespace App;

class Team extends BaseModel
{
	const REGION_NA = 1;
	const REGION_EU = 2;
	const REGION_LCK = 3;
	const REGION_LPL = 4;
	const REGION_LMS = 5;
	const REGION_GPL = 6;
	const REGION_CBLOL = 7;
	const REGION_LLN = 8;
	const REGION_CLS = 9;
	const REGION_LJL = 10;
	const REGION_TCL = 11;
	const REGION_LCL = 12;
	const REGION_OPL = 13;
	
	public static $REGIONS = array(
		array(
			'id' => self::REGION_NA, 
			'name' => 'League of Legends Championship Series', 
			'region' => 'North America', 
			'location' => 'Los Angeles'
		),
		array(
			'id' => self::REGION_EU, 
			'name' => 'League of Legends Championship Series', 
			'region' => 'Europe', 
			'location' => 'Berlin'
		),
		array(
			'id' => self::REGION_LCK, 
			'name' => 'League of Legends Champions Korea', 
			'region' => 'South Korea', 
			'location' => 'Seoul'
		),
		array(
			'id' => self::REGION_LPL, 
			'name' => 'League of Legends Pro League', 
			'region' => 'China', 
			'location' => 'Shanghai'
		),
		array(
			'id' => self::REGION_LMS, 
			'name' => 'League of Legends Masters Series', 
			'region' => 'Taiwan', 
			'location' => 'Taipei'
		),
		array(
			'id' => self::REGION_GPL, 
			'name' => 'Garena Premier League', 
			'region' => 'Southeast Asia', 
			'location' => 'various'
		),
		array(
			'id' => self::REGION_CBLOL, 
			'name' => 'Campeonato Brasileiro de League of Legends', 
			'region' => 'Brazil', 
			'location' => 'São Paulo'
		),
		array(
			'id' => self::REGION_LLN, 
			'name' => 'Latin America Cup North', 
			'region' => 'Latin America North', 
			'location' => 'Mexico'
		),
		array(
			'id' => self::REGION_CLS, 
			'name' => 'Latin America Cup South', 
			'region' => 'Latin America South', 
			'location' => 'Latin America'
		),
		array(
			'id' => self::REGION_LJL, 
			'name' => 'League of Legends Japan League', 
			'region' => 'Japan', 
			'location' => 'Tokyo'
		),
		array(
			'id' => self::REGION_TCL, 
			'name' => 'Turkey Champions League', 
			'region' => 'Turkey', 
			'location' => 'Instanbul'
		),
		array(
			'id' => self::REGION_LCL, 
			'name' => 'League of Legends Continental League', 
			'region' => 'CIS', 
			'location' => 'Moscow'
		),
		array(
			'id' => self::REGION_OPL, 
			'name' => 'Oceanic Pro League', 
			'region' => 'Oceania', 
			'location' => 'Sydney'
		),
	);
	
    public function players()
    {
        return $this->hasMany('App\Player');
    }
}
