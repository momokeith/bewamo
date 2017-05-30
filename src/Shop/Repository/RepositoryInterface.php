<?php

namespace Kfina\Bewamo\Shop\Repository;

use Kfina\Bewamo\Shop\Entity\ShopInterface;

interface RepositoryInterface
{
    /**
     * @param int $id
     *
     * @return ShopInterface
     */
    public function findById(int $id): ShopInterface;

    /**
     * @param ShopInterface $shop
     *
     * @return ShopInterface
     */
    public function create(ShopInterface $shop);
}
