<?php 

class Callback extends Controller {

    public function index(){

        $auth0 = new \Auth0\SDK\Auth0([
            'domain' => $_ENV['AUTH0_DOMAIN'],
            'clientId' => $_ENV['AUTH0_CLIENT_ID'],
            'clientSecret' => $_ENV['AUTH0_CLIENT_SECRET'],
            'cookieSecret' => $_ENV['AUTH0_COOKIE_SECRET'],
            'redirectUri' => CONFIG['SITEURL'],
            'audience' => ['https://bookings.max-wax.co.uk']
        ]);

        
        $hasAuthenticated = isset($_GET['state']) && isset($_GET['code']);
        if ($hasAuthenticated) {
            try {
                $auth0->exchange();                
                header('Location: '. CONFIG['SITEURL']);
                exit;
            } catch (\Throwable $th) {
                printf('Unable to complete authentication: %s', $th->getMessage());
                exit;
            }
        } 

    }

}