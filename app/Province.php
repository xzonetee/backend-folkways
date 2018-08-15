<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Province extends Model
{
    public function homestaylists()
    {
        return $this->hasMany('App\Homestaylist');
    }
}
