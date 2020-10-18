<?php


namespace Agweria\Mpesa\Commands;


use Illuminate\Console\Command;

/**
 * Class CreateAppCommand
 * @package Agweria\Mpesa\Commands
 */
class CreateAppCommand extends Command
{

    protected $signature = "mpesa:new_app";

    protected $description = 'Crate an mpesa app for C2B, B2B or B2B';

}
