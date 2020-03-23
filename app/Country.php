<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    public function radio()
    {
        return $this->hasMany('App\Models\Radio');
    }
}
