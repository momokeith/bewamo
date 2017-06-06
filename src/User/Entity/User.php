<?php

namespace Kfina\Bewamo\User\Entity;

use Kfina\Bewamo\Shop\Entity\ShopInterface;

class User implements UserInterface
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $firstName;

    /**
     * @var string
     */
    private $lastName;

    /**
     * @var ShopInterface[]
     */
    private $shops;

    /**
     * User constructor.
     *
     * @param string $firstName
     */
    private function __construct(
        string $firstName
    ) {
        $this->firstName = $firstName;
    }

    /**
     * @param string $firstName
     *
     * @return UserInterface
     */
    public static function createWithFirstName(string $firstName)
    {
        return new self($firstName);
    }
    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId(int $id)
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getFirstName(): string
    {
        return $this->firstName;
    }

    /**
     * @param string $firstName
     */
    public function setFirstName(string $firstName)
    {
        $this->firstName = $firstName;
    }

    /**
     * @return string
     */
    public function getLastName(): string
    {
        return $this->lastName;
    }

    /**
     * @param string $lastName
     */
    public function setLastName(string $lastName)
    {
        $this->lastName = $lastName;
    }

    /**
     * @return ShopInterface[]
     */
    public function getShops(): array
    {
        return $this->shops;
    }

    /**
     * @param ShopInterface[] $shops
     */
    public function setShops(array $shops)
    {
        $this->shops = $shops;
    }

    /**
     * @param ShopInterface $shop
     */
    public function addShop(ShopInterface $shop)
    {
        $this->shops[] = $shop;
    }
}
