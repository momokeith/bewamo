<?php

namespace Kfina\Bewamo\Shop\Service;

use Kfina\Bewamo\Shop\Entity\ShopInterface;
use Kfina\Bewamo\Shop\Repository\RepositoryInterface;

/**
 * Class ShopService.
 */
class ShopService implements ShopServiceInterface
{
    /**
     * @var RepositoryInterface
     */
    private $shopRepository;

    /**
     * ShopService constructor.
     *
     * @param RepositoryInterface $shopRepository
     */
    public function __construct(RepositoryInterface $shopRepository)
    {
        $this->shopRepository = $shopRepository;
    }

    /**
     * {@inheritdoc}
     */
    public function findShopWithId(int $id)
    {
        return $this->shopRepository->findById($id);
    }

    /**
     * {@inheritdoc}
     */
    public function create(ShopInterface $shop)
    {
        return $this->shopRepository->create($shop);
    }

    /**
     * {@inheritdoc}
     */
    public function findShopWithName(string $name)
    {
        return $this->shopRepository->findByName($name);
    }

    /**
     * {@inheritdoc}
     */
    public function findAll()
    {
        return $this->shopRepository->findAll();
    }
}
