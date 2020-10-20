<?php

namespace Agweria\Mpesa\Library;
/**
 * Class RegisterUrl
 * @package Agweria\Mpesa\Library
 */
class RegisterUrl extends ApiCore
{
    /**
     * @param string|null $shortCode
     * @param string|null $confirmationURL
     * @param string|null $validationURL
     * @param string|null $onTimeout
     * @return mixed
     * @throws MpesaException
     * @throws \Exception
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function submit($details)
    {
        $body = [
            'ShortCode' => $details['shortcode'],
            'ResponseType' => 'Completed',
            'ConfirmationURL' => $details['confirmation'],
            'ValidationURL' => $details['validation']
        ];
        return $this->sendRequest($body, 'register');
    }
}
