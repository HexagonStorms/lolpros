<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BaseModel extends Model
{
    public static function findTypeById($types, $id, $defaultIndex = 0)
    {
        $derivedType = isset($types[$defaultIndex]) ? $types[$defaultIndex] : null;
        foreach ($types as $type)
        {
            if (isset($type['id']) && $type['id'] == $id)
            {
                $derivedType = $type;
                break;
            }
        }
        return $derivedType;
    }
}