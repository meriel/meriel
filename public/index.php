<?php

if (file_exists(__DIR__.'/../vendor/autoload.php')) {
    require __DIR__.'/../vendor/autoload.php';
}


$app = require __DIR__.'/../boot/start.php';



// start the application
$app->run();