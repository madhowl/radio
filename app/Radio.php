<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Radio extends Model
{
    public function categories()
    {
        return $this->belongsTo(Category::class);
    }
    public function country()
    {
        return $this->belongsTo('Country');
    }
}
