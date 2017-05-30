<?php


namespace Kfina\Bewamo\User\Repository;



use Kfina\Bewamo\User\Entity\UserInterface;

interface RepositoryInterface
{
    /**
     * @param int $id
     *
     * @return UserInterface
     */
    public function findById(int $id): UserInterface;

    /**
     * @param UserInterface $user
     *
     * @return UserInterface
     */
    public function create(UserInterface $user);
}