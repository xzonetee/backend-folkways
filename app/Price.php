<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Price extends Model
{
    public function homeprices()
    {
        return $this->hasMany('App\Homeprice');
    }
}
