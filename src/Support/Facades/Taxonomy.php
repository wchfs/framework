<?php

namespace Themosis\Support\Facades;

use Illuminate\Support\Facades\Facade;

class Taxonomy extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'taxonomy';
    }
}
