<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rod extends Model
{
    public function pants()
    {
        return $this->hasMany('App\Pant');
    }
}



