<?php

use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;
use Interop\Container\ContainerInterface;

return [
    'factories' => [
        EntityManager::class => function (ContainerInterface $container, $requestedName) {
            $globalConfig = $container->get('Config');
            $isDevMode = true;
            $metadataConfig = Setup::createXMLMetadataConfiguration(
                array($globalConfig['doctrine']['metadata']['path']),
                $isDevMode
            );

            return EntityManager::create($globalConfig['db'], $metadataConfig);
        },
    ],
];
