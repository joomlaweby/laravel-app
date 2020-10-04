<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Page
 *
 * @category  Category description
 * @package  App
 */
class Page extends Model
{
    public function user() {
        return $this->belongsTo('App\User');
    }
}
