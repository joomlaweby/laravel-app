<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Article
 *
 * @category Article
 * @package  App
 * @author   Miroslav Orincak
 * @licence  http://www.gnu.org/copyleft/gpl.html GNU General Public License
 * @link     http://www.gnu.org
 */
class Article extends Model
{
    public function getRouteKeyName () {
        return 'slug';
    }

    public function user() {
        return $this->belongsTo('App\User');
    }

    public function comments() {
        return $this->hasMany('App\Comment')->latest();
    }

    public function category() {
        return $this->belongsTo('App\Category');
    }
}
