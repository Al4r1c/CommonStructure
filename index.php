<?php
include_once(__DIR__ . '/config/bootstrap.php');

include_once(__DIR__ . '/config/functions.php');

include_once(__DIR__ . '/vendor/autoload.php');


$config = array(
    'configFile' => __DIR__ . '/config/config.yaml',
    'routeFile' => __DIR__ . '/config/routes.yaml',
    'controllersPath' => __DIR__ . '/src/application/controller/',
    'templatesPath' => __DIR__ . '/src/application/templates/',
    'localesPath' => __DIR__ . '/public/locale/',
);


$main = new \AlaroxFramework\Main($config);
echo $main->run();
