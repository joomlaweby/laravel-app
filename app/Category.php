<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Category
 *
 * @category Category
 * @package  App
 *
 */
class Category extends Model
{
    /**
     * @return string
     */
    public function getRouteKeyName () {
        return 'slug';
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function articles() {
        return $this->hasMany('App\Article')->latest();
    }
}
