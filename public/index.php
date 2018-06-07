<?php
// FrontController, require autoload from Composer
require (__DIR__.'/../vendor/autoload.php');

// Use class Application from App folder
use NmiDev\Application;

// Instantiation of Application
$app = new Application();

// Call the run method from Application
$app->run();

// Debug : check include files
// dump(get_included_files());