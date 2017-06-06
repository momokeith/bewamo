<?php

return array(
    'db' => array(
        'driver' => 'pdo_mysql',
        'user' => 'bewamo_test',
        'password' => 'bewamo_test',
        'dbname' => 'bewamo_test',
        'host' => 'localhost',
    ),
    'doctrine' => [
        'metadata' => [
            'path' => __DIR__ . '/../../orm/doctrine',
        ],
    ],
);
