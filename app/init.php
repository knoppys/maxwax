<?php 

require_once 'core/App.php';
require_once 'core/Controller.php';
require_once '../vendor/autoload.php';
require_once 'core/functions.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();