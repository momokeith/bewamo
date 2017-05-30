<?php

namespace Kfina\Bewamo\Shop\Entity;

use Kfina\Bewamo\User\Entity\UserInterface;

class Shop implements ShopInterface
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $name;

    /**
     * @var UserInterface[]
     */
    private $users;

    /**
     * Shop constructor.
     *
     * @param string $name
     */
    private function __construct(string $name)
    {
        $this->name = $name;
    }

    /**
     * @param string $name
     *
     * @return ShopInterface
     */
    public static function createWithName(string $name)
    {
        return new self($name);
    }

    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name)
    {
        $this->name = $name;
    }

    /**
     * @return UserInterface[]
     */
    public function getUsers(): array
    {
        return $this->users;
    }

    /**
     * @param UserInterface[] $users
     */
    public function setUsers(array $users)
    {
        $this->users = $users;
    }

    /**
     * @param UserInterface $user
     */
    public function addUser(UserInterface $user)
    {
        $user->addShop($this);
        $this->users[] = $user;
    }
}
