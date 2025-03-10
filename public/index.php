<?php 

require_once '../app/init.php';

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

$siteurl = 'https://alex.preactiv.dev/mwapp/public';
define('CONFIG', [
    'APP' => dirname(dirname(__FILE__)).'/app',
    'SITEURL' => $siteurl,
    'VIEWS' => dirname(dirname(__FILE__)).'/app/views',
    'IMAGES' => $siteurl.'/images'
]);

$app = new App();