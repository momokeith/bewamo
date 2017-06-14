<?php

namespace Kfina\Bewamo\User\Service;

use Kfina\Bewamo\User\Entity\UserInterface;
use Kfina\Bewamo\User\Repository\RepositoryInterface;

class UserService implements UserServiceInterface
{
    /**
     * @var RepositoryInterface
     */
    private $userRepository;

    /**
     * UserService constructor.
     *
     * @param RepositoryInterface $userRepository
     */
    public function __construct(RepositoryInterface $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    /**
     * {@inheritdoc}
     */
    public function findUserWithId(int $id)
    {
        return $this->userRepository->findById($id);
    }

    /**
     * {@inheritdoc}
     */
    public function create(UserInterface $user)
    {
        return $this->userRepository->create($user);
    }
}
