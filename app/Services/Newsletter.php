<?php

namespace App\Services;

class Newsletter
{
    public function subscribe(string $email, string $list = null)
    {
        $list ??= config('services.mailchimp.lists.subscribers');

        return $this->client()->lists->addListMember($list, [
            "email_address" => $email,
            "status" => "subscribed",
        ]);
    }

    protected function client()
    {
        $client = new \MailchimpMarketing\ApiClient();

        return $client->setConfig([
            'apiKey' => config('services.mailchimp.key'),
            'server' => 'us21'
        ]);
    }
}