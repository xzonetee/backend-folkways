<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Homestay extends Model
{
    public function province()
    {
        return $this->belongTo('App\Province');
    }
    public function homeprices()
    {
        return $this->hasMany('App\Homeprice');
    }
}

