<?php
// FrontController
require (__DIR__.'/../vendor/autoload.php');

// Use class Application from App folder
use NmiDev\Application;

$app = new Application();

$app->run();