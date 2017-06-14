<?php

namespace Kfina\Bewamo\User\Entity;

use Kfina\Bewamo\Shop\Entity\ShopInterface;

interface UserInterface
{
    /**
     * @param ShopInterface $shop
     */
    public function addShop(ShopInterface $shop);

    /**
     * @return int
     */
    public function getId():int;
}