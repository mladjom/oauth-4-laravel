<?php 
/**
 * @author     Maldjo <mladen@milentijevic.com>
 * @copyright  Copyright (c) 2014
 * @license    http://www.opensource.org/licenses/mit-license.html MIT License
 */

namespace Mladjo\OAuth\Facade;

use Illuminate\Support\Facades\Facade;

class OAuth extends Facade 
{

    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor() { return 'oauth'; }

}