<?php

namespace LaravelHashids\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * Hashids
 *
 * @package LaravelHashids\Facades
 * @author Nathaniel Blackburn <support@nblackburn.uk> (http://nblackburn.uk)
 */
class Hashids extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'hashids';
    }
}
