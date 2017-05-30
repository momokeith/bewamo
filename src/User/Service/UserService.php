<?php

namespace Kfina\Bewamo\User\Service;

use Kfina\Bewamo\User\Entity\UserInterface;
use Kfina\Bewamo\User\Repository\DoctrineRepository;

class UserService implements UserServiceInterface
{
    /**
     * @var DoctrineRepository
     */
    private $userRepository;

    /**
     * UserService constructor.
     *
     * @param DoctrineRepository $userRepository
     */
    public function __construct(DoctrineRepository $userRepository)
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
