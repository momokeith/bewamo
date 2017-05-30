<?php

namespace Kfina\Bewamo\User\Service;

use Kfina\Bewamo\User\Entity\UserInterface;

interface UserServiceInterface
{
    /**
     * @param int $id
     *
     * @return UserInterface
     */
    public function findUserWithId(int $id);

    /**
     * @param UserInterface $user
     *
     * @return UserInterface
     */
    public function create(UserInterface $user);
}
