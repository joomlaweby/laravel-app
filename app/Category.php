<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function getRouteKeyName () {
        return 'slug';
    }

    public function articles() {
        return $this->hasMany('App\Article')->latest();
    }
}
