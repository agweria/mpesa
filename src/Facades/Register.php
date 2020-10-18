<?php


namespace Agweria\Mpesa\Facades;


use Illuminate\Support\Facades\Facade;

class Register extends Facade
{
    /**
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'agweria_mpesa_register';
    }
}
