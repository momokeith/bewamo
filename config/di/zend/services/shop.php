<?php

use Interop\Container\ContainerInterface;
use Kfina\Bewamo\Shop\Service\ShopServiceInterface;
use Kfina\Bewamo\Shop\Service\ShopService;
use Kfina\Bewamo\Shop\Repository\RepositoryInterface;
use Kfina\Bewamo\Shop\Repository\DoctrineRepository;
use Doctrine\ORM\EntityManager;
use Kfina\Bewamo\Shop\Entity\Shop;
use Doctrine\ORM\Mapping\ClassMetadata;

return array(
    'factories' => [
        ShopServiceInterface::class => function (ContainerInterface $container, $requestedName) {
            return new ShopService(
                $container->get(RepositoryInterface::class)
            );
        },

        RepositoryInterface::class => function (ContainerInterface $container, $requestedName) {
            return new DoctrineRepository(
                $container->get(EntityManager::class),
                new ClassMetadata(Shop::class)
            );
        },
    ],
);
