<?php


namespace Agweria\Mpesa\Services;


use Agweria\Mpesa\Models\MpesaApp;

/**
 * Class MpesaAppService
 * @package Agweria\Mpesa\Services
 */
class MpesaAppService
{
    public $shortcode;

    /**
     * @param $shortcode
     * @return $this
     */
    public function setShortcode($shortcode): MpesaAppService
    {
        $this->shortcode = $shortcode;
        return $this;
    }

    /**
     * @param $details array
     * @return MpesaApp
     */
    public function createApp($details): MpesaApp
    {
        $app = new MpesaApp;
        $app->shortcode = $details['shortcode'];
        $app->consumer_key = $details['consumer_key'];
        $app->consumer_secret = $details['consumer_secret'];
        $app->environment = $details['environment'];
        $app->enable_b2c = $details['b2c_allowed'];
        $app->enable_b2b = $details['b2b_allowed'];
        $app->passkey = $details['passkey'];
        $app->initiator_username = $details['username'] ?? null;
        $app->security_password = $details['password'] ?? null;
        $app->save();
        return $app;
    }

}
