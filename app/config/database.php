<?php

return array(
    'fetch' => PDO::FETCH_CLASS,
    'error' => PDO::ERRMODE_WARNING,
    'default' => 'mysql',
    'connection' => array(
        'mysql' => array(
            'driver' => 'mysql',
            'host' => 'localhost',
            'database' => 'meriel',
            'username' => 'root',
            'password' => '',
            'charset' => 'utf8',
            'collation' => 'utf8_unicode_ci',
            'prefix' => ''
        )
    )
);
