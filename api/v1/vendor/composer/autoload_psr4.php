<?php

// autoload_psr4.php @generated by Composer

$vendorDir = dirname(dirname(__FILE__));
$baseDir = dirname($vendorDir);

return array(
    'Symfony\\Component\\Console\\' => array($vendorDir . '/symfony/console'),
    'Monolog\\' => array($vendorDir . '/monolog/monolog/src/Monolog'),
    'Doctrine\\Instantiator\\' => array($vendorDir . '/doctrine/instantiator/src/Doctrine/Instantiator'),
    'App\\Provider\\' => array($baseDir . '/app/providers'),
    'App\\Model\\' => array($baseDir . '/app/models'),
    'App\\Middleware\\' => array($baseDir . '/app/middlewares'),
    'App\\Helper\\' => array($baseDir . '/app/helpers'),
    'App\\Controller\\' => array($baseDir . '/app/controllers'),
    'App\\' => array($baseDir . '/app'),
);
