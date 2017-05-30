<?php

use Interop\Container\ContainerInterface;
use Doctrine\ORM\EntityManager;
use Kfina\Bewamo\User\Service\UserServiceInterface;
use Kfina\Bewamo\User\Service\UserService;
use Kfina\Bewamo\User\Repository\RepositoryInterface;
use Kfina\Bewamo\User\Repository\DoctrineRepository;
use Kfina\Bewamo\User\Entity\User;
use Doctrine\ORM\Mapping\ClassMetadata;

return array(
    'factories' => [
        UserServiceInterface::class => function (ContainerInterface $container, $requestedName) {
            return new UserService(
                $container->get(RepositoryInterface::class)
            );
        },

        RepositoryInterface::class => function (ContainerInterface $container, $requestedName) {
            return new DoctrineRepository(
                $container->get(EntityManager::class),
                new ClassMetadata(User::class)
            );
        },
    ],
);
