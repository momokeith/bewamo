<?php

namespace Kfina\Bewamo\Shop\Repository;

use Doctrine\ORM\EntityRepository;
use Kfina\Bewamo\Shop\Entity\ShopInterface;

class DoctrineRepository extends EntityRepository implements RepositoryInterface
{
    /**
     * {@inheritdoc}
     */
    public function findById(int $id): ShopInterface
    {
        return $this->find($id);
    }

    /**
     * {@inheritdoc}
     */
    public function create(ShopInterface $shop)
    {
        $this->getEntityManager()->persist($shop);
        $this->getEntityManager()->flush();

        return $shop;
    }

    /**
     * {@inheritdoc}
     */
    public function findByName(string $name)
    {
        return $this->findBy(['name' => $name]);
    }

    /**
     * {@inheritdoc}
     */
    public function findAll()
    {
        return $this->findAll();
    }
}
