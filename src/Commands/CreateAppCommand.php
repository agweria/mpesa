<?php

namespace Agweria\Mpesa\Commands;

use Agweria\Mpesa\Services\MpesaAppService;
use Illuminate\Console\Command;

/**
 * Class CreateAppCommand.
 */
class CreateAppCommand extends Command
{
    protected $signature = 'mpesa:new_app';

    protected $description = 'Crate an mpesa app for C2B, B2B or B2B';
    /**
     * @var MpesaAppService
     */
    private $mpesaAppService;

    /**
     * CreateAppCommand constructor.
     * @param MpesaAppService $mpesaAppService
     */
    public function __construct(MpesaAppService $mpesaAppService)
    {
        parent::__construct();
        $this->mpesaAppService = $mpesaAppService;
    }

    public function handle()
    {
        $details = [
            'shortcode' => $this->ask('Enter the shortcode'),
            'consumer_key' => $this->ask('Enter the consumer key'),
            'consumer_secret' => $this->ask('Enter the consumer secret'),
            'environment' => $this->choice('Is this in sandbox or production', ['sandbox', 'production'], 'sandbox')
        ];
        $b2c_allowed = $this->confirm('Is this app allowed to perform B2C transactions?');
        $b2b_allowed = $this->confirm('Is this app allowed to perform B2B transactions?');
        $details['b2c_allowed'] = $b2c_allowed;
        $details['b2b_allowed'] = $b2b_allowed;
        $details['passkey'] = $this->ask('Enter the passkey');
        if ($b2c_allowed || $b2b_allowed) {
            $this->info("Additional information to for outgoing payments");
            $details['username'] = $this->ask('Initiator username');
            $details['password'] = $this->ask('Security credentials for initiator');
        }
        $app = $this->mpesaAppService->createApp($details);

        if ($app->id) {
            $this->info('App has been added successfully');
            $register = $this->confirm('Do you want to register endpoints for confirmation and validation?');
            if ($register) {
                $shortcode = $app->shortcode;
                $this->call("mpesa:register_url --shortcode=$shortcode");
            }
        } else {
            $this->error('Something went wrong please try again');
        }
    }
}
