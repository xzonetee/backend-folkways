<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Homeprice extends Model
{
    public function homestay()
    {
        return $this->belongTo('App\Homestay');
    }
    public function price()
    {
        return $this->belongTo('App\Price');
    }
}

