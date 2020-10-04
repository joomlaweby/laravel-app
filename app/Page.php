<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Page
 *
 * @category Page
 * @package  App
 * @author   Miroslav Orincak <username@example.com>
 * @licence  http://www.gnu.org/copyleft/gpl.html GNU General Public License
 * @link     http://www.gnu.org
 */
class Page extends Model
{
    public function user() {
        return $this->belongsTo('App\User');
    }
}
