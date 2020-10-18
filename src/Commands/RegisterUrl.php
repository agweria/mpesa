<?php


namespace Agweria\Mpesa\Commands;


use Illuminate\Console\Command;

/**
 * Class RegisterUrl
 * @package Agweria\Commands
 */
class RegisterUrl extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'mpesa:register_url';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Register mpesa validation and confirmation URL fo your app';
}
