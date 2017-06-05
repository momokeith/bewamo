<?php

require_once 'vendor/autoload.php';

use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;

$dbParams = array(
    'driver' => 'pdo_mysql',
    'user' => 'bewamo_test',
    'password' => 'CS3dnC?$A4\uh@&(',
    'dbname' => 'bewamo_test',
    'host' => 'localhost',
);

$isDevMode = true;
$config = Setup::createXMLMetadataConfiguration(
    array(__DIR__.'/config/orm/doctrine'),
    $isDevMode
);
$entityManager = EntityManager::create($dbParams, $config);
