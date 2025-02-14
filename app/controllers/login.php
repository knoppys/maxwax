<?php 

class Login extends Controller {

    public function index(){

        $auth0 = new \Auth0\SDK\Auth0([
            'domain' => $_ENV['AUTH0_DOMAIN'],
            'clientId' => $_ENV['AUTH0_CLIENT_ID'],
            'clientSecret' => $_ENV['AUTH0_CLIENT_SECRET'],
            'cookieSecret' => $_ENV['AUTH0_COOKIE_SECRET'],
            'redirectUri' => 'http://mwapp.test/public/callback',
            'audience' => ['https://app.max-wax.co.uk']
        ]);

        // It's a good idea to reset user sessions each time they go to login to avoid "invalid state" errors, should they hit network issues or other problems that interrupt a previous login process:
        $auth0->clear();

        // Finally, set up the local application session, and redirect the user to the Auth0 Universal Login Page to authenticate.
        header("Location: " . $auth0->login('http://mwapp.test/public/callback'));
        exit;

    }

}