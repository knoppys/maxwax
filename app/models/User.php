<?php

class User
{

    public $authUser;

    public $apiUser;

    function __construct()
    {

        $auth0 = new \Auth0\SDK\Auth0([
            'domain' => $_ENV['AUTH0_DOMAIN'],
            'clientId' => $_ENV['AUTH0_CLIENT_ID'],
            'clientSecret' => $_ENV['AUTH0_CLIENT_SECRET'],
            'cookieSecret' => $_ENV['AUTH0_COOKIE_SECRET'],
            'redirectUri' => 'http://mwapp.test/public/',
            'audience' => ['https://app.max-wax.co.uk']
        ]);

        //Check if the user is logged in
        $session = $auth0->getCredentials();

        if ($session !== null) {

            //User is logged in, set the user variable to the session data
            $this->authUser = $session->user;

            //Rough connect to the API and tidy it up later with some error handling
            $guzzle = new \GuzzleHttp\Client();
            
            //Just a test response
            $response = $guzzle->request('GET', 'https://app.max-wax.co.uk/api/customers/'.$session->user['customer_id'], [
                'headers' => [
                    'Authorization' => 'Bearer ' . $auth0->getAccessToken()
                ]
            ]);

            $body = $response->getBody();
            $content = json_decode($body->getContents());

            if($content){
                $this->apiUser = $content;
            }

        }
    }
}
