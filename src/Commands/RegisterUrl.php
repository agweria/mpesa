<?php

namespace Agweria\Mpesa\Commands;


use Agweria\Mpesa\Models\MpesaApp;
use Illuminate\Console\Command;

/**
 * Class RegisterUrl.
 */
class RegisterUrl extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'mpesa:register_url  {--S|shortcode=}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Register mpesa validation and confirmation URL fo your app';
    /**
     * @var RegisterUrl|\Agweria\Mpesa\Library\RegisterUrl
     */
    private $registerUrl;

    /**
     * Create a new command instance.
     *
     * @param RegisterUrl $registerUrl
     */
    public function __construct(\Agweria\Mpesa\Library\RegisterUrl $registerUrl)
    {
        parent::__construct();
        $this->registerUrl = $registerUrl;
    }

    public function handle()
    {
        $shortcode = $this->option('shortcode');
        if (!$shortcode) {
            $apps = MpesaApp::whereRegistered(false)->get();
            if ($apps->isEmpty()) {
                $this->error('You do not have any app, or all apps have been registered. Please add an app first');
                return;
            }
            $shortcode = $this->choice('Which shortcode do you need to register', $apps->pluck('shortcode')->toArray(), 0);
        }
        $this->warn('For this package to work efficiently, please leave the default set of urls. To customize please use event handlers');
        $details['shortcode'] = $shortcode;
        $details['confirmation'] = $this->askConfirmationUrl();
        $details['validation'] = $this->askValidationUrl();
        $result = $this->registerUrl->submit($details);

        $this->info("Registration of URL was successful");
    }

    private function askConfirmationUrl(): string
    {
        return $this->ask('Confirmation Url', \config('agweria.mpesa.confirmation_url'));
    }

    private function askValidationUrl(): string
    {
        return $this->ask('Validation Url', \config('agweria.mpesa.validation_url'));
    }
}
