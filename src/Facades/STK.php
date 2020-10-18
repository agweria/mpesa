<?php

namespace Agweria\Mpesa\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * Class STK.
 */
class STK extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'agweria_mpesa_stk';
    }
}
