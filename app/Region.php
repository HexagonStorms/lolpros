<?php

namespace App;

class Region extends BaseModel
{

    public function teams()
    {
        return $this->hasMany('App\Team');
    }

}
