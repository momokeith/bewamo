<?php

require_once 'vendor/autoload.php';

use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;

$dbParams = array(
    'driver'   => 'pdo_mysql',
    'user'     => 'bewamo',
    'password' => 'bewamo',
    'dbname'   => 'bewamo',
    'host'   => '192.168.50.6',
);

$isDevMode = true;
$config = Setup::createXMLMetadataConfiguration(
    array(__DIR__."/config/orm/doctrine"),
    $isDevMode
);
$entityManager = EntityManager::create($dbParams, $config);
