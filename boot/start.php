<?php

/*
 * This file is part of the Meriel package.
 *
 * (c) Stefano Anedda <dearste@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

error_reporting(-1);

use \Meriel\Config\Loader as Config;


$app = new \Meriel\Base\Application();

$app->register('app', $app);

$app->bindBasePaths(require __DIR__.'/paths.php');

\Meriel\Facades\Facade::clearResolvedInstances();
\Meriel\Facades\Facade::setFacadeApplication($app);


$app->register('config', $config = new Config($app['path.app'].'/config'));


\Meriel\Base\AliasLoader::getInstance($config['app']['aliases'])->register();


$app->registerCoreContainerAliases();


$routes = $app['path.app'].'/routes.php';

if (file_exists($routes)) {
    require $routes;
}


return $app;