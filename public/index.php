<?php

if (file_exists(__DIR__.'/../vendor/autoload.php')) {
    require __DIR__.'/../vendor/autoload.php';
}


$app = require __DIR__.'/../boot/start.php';




// run the scss compiler every you the application is hit (in development)
// TODO: build a switch for development/production
SassCompiler::run("scss/", "css/");

// start the application
$app->run();