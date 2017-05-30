<?php

return array(
    'db' => array(
        'driver' => 'pdo_mysql',
        'user' => 'bewamo',
        'password' => 'bewamo',
        'dbname' => 'bewamo',
        'host' => '192.168.50.6',
    ),
    'doctrine' => [
        'metadata' => [
            'path' => __DIR__ . '/../../orm/doctrine',
        ],
    ],
);
