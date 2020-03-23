<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function radio()
    {
        return $this->hasMany('App\Models\Radio');
    }
}
