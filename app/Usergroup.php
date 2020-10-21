<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Usergroup
 * @package App
 */
class Usergroup extends Model
{
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function users() {
        return $this->hasMany('App\User');
    }
}
