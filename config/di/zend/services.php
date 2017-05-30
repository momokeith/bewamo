<?php

use Zend\Stdlib\ArrayUtils;

$services =  ArrayUtils::merge(
   require_once('services/doctrine.php'),
   require_once('services/shop.php')
);

$services =  ArrayUtils::merge(
    $services,
    require_once('services/user.php')
);

return $services;
