<?php

namespace Kfina\Bewamo\User\Repository;

use Kfina\Bewamo\User\Entity\UserInterface;
use Doctrine\ORM\EntityRepository;

class DoctrineRepository extends EntityRepository implements RepositoryInterface
{
    /**
     * {@inheritdoc}
     */
    public function findById(int $id): UserInterface
    {
        return $this->find($id);
    }

    /**
     * {@inheritdoc}
     */
    public function create(UserInterface $user)
    {
        $this->getEntityManager()->persist($user);
        $this->getEntityManager()->flush();

        return $user;
    }
}
