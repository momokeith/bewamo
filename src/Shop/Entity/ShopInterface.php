<?php


namespace Kfina\Bewamo\Shop\Entity;


use Kfina\Bewamo\User\Entity\UserInterface;

interface ShopInterface
{
    /**
     * @param UserInterface $user
     */
    public function addUser(UserInterface $user);
}