<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    const POSITION_TOP = 1;
    const POSITION_JUNGLE = 2;
    const POSITION_MID = 3;
    const POSITION_ADC = 4;
    const POSITION_SUPPORT = 5;
    const POSITION_SUB = 6;
    const POSITION_COACH = 7;
    
    public static $POSITIONS = array(
    	array('id' => self::POSITION_TOP, 'name' => 'Top'),
    	array('id' => self::POSITION_JUNGLE,  'name' => 'Jungle'),
    	array('id' => self::POSITION_MID, 'name' => 'Mid'),
    	array('id' => self::POSITION_ADC, 'name' => 'ADC'),
    	array('id' => self::POSITION_SUPPORT, 'name' => 'Support'),
    	array('id' => self::POSITION_SUB, 'name' => 'Sub'),
    	array('id' => self::POSITION_COACH, 'name' => 'Coach')
    );
}
