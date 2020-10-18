<?php

namespace Agweria\Mpesa\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * Class B2C.
 */
class B2C extends Facade
{
    /**
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'agweria_mpesa_b2c';
    }
}
