<?php

namespace App;

class Game extends BaseModel
{

    public function regions()
    {
        return $this->hasMany('App\Region');
    }

}
