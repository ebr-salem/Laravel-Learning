<?php

namespace App\Services;

use MailchimpMarketing\ApiClient;

class ConvertKitNewsletter implements Newsletter
{
    public function __construct(protected ApiClient $client)
    {
        dd('Hello from Convertkit');
    }

    public function subscribe(string $email, string $list = null)
    {
        //
    }
}
