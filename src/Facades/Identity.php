<?php


namespace Agweria\Mpesa\Facades;


use Illuminate\Support\Facades\Facade;

/**
 * Class Identity
 * @package Agweria\Mpesa\Facades
 */
class Identity extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'agweria_mpesa_identity';
    }
}
