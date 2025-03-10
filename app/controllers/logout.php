<?php 

use Auth0\SDK\Auth0;
use Auth0\SDK\Configuration\SdkConfiguration;

class Logout extends Controller {

    public function index(){


        $auth0 = new \Auth0\SDK\Auth0([
            'domain' => $_ENV['AUTH0_DOMAIN'],
            'clientId' => $_ENV['AUTH0_CLIENT_ID'],
            'clientSecret' => $_ENV['AUTH0_CLIENT_SECRET'],
            'cookieSecret' => $_ENV['AUTH0_COOKIE_SECRET'],
            'redirectUri' => CONFIG['SITEURL'],
            'audience' => ['https://app.max-wax.co.uk']
        ]);

        // Finally, set up the local application session, and redirect the user to the Auth0 Universal Login Page to authenticate.
        header("Location: " . $auth0->logout(CONFIG['SITEURL'],));
        exit;

    }

}