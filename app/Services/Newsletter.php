<?php
namespace App\Services;

class Newsletter{
    public function subscribe(string $email){

        return $this->client()->lists->addListMember(config('services.mailchimp.lists.subscribers'),[
            'email_address'=> $email,
            'status' => 'subscribed'
        ]);
    }

    public function client(){

        return (new \MailchimpMarketing\ApiClient())->setConfig([
            'apiKey' => config('services.mailchimp.key'),
            'server' => 'us21'
        ]);
    }
}
