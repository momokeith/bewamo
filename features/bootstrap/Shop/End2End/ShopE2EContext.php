<?php

namespace Kfina\Bewamo\Test\Shop\End2End;

use Behat\Behat\Context\Context;
use Behat\Behat\Tester\Exception\PendingException;
use Behat\Gherkin\Node\TableNode;
use Interop\Container\ContainerInterface;
use Kfina\Bewamo\Shop\Entity\Shop;
use Kfina\Bewamo\Shop\Entity\ShopInterface;
use Kfina\Bewamo\Shop\Service\ShopServiceInterface;
use Kfina\Bewamo\User\Entity\User;
use Kfina\Bewamo\User\Entity\UserInterface;
use Kfina\Bewamo\User\Service\UserServiceInterface;
use Zend\ServiceManager\ServiceManager;

/**
 * Defines application features from the specific context.
 */
class ShopE2EContext implements Context
{
    /**
     * @var ContainerInterface
     */
    private $container;

    /**
     * @var UserInterface
     */
    private $user;

    /**
     * @var ShopInterface[]
     */
    private $shops;

    /**
     * Initializes context.
     *
     * Every scenario gets its own context instance.
     * You can also pass arbitrary arguments to the
     * context constructor through behat.yml.
     */
    public function __construct()
    {
        $this->container = new ServiceManager(
            include_once(__DIR__.'/../../../../config/di/zend/services.php')
        );

        $this->container->setService(
            'Config',
            include_once(__DIR__.'/../../../../config/di/zend/parameters_e2e.php')
        );
    }

    /**
     * @Given The following users exist:
     */
    public function theFollowingUsersExist(TableNode $users)
    {
        /** @var $userService UserServiceInterface */
        $userService = $this->container->get(UserServiceInterface::class);

        foreach ($users->getHash() as $user) {
            $this->user = $userService->create(
                User::createWithFirstName($user['firstName'])
            );
        }
    }

    /**
     * @When I create the following shop for the user :userName:
     */
    public function iCreateTheFollowingShopForTheUser($userName, TableNode $shops)
    {
        /** @var $shopService ShopServiceInterface */
        $shopService = $this->container->get(ShopServiceInterface::class);

        foreach ($shops->getHash() as $shop) {
            $shop = Shop::createWithName($shop['name']);
            $shop->addUser($this->user);

            $shop = $shopService->create(
                $shop
            );

            $this->shops[] = $shop;
        }
    }

    /**
     * @Then A shop with the name :arg1 should exist
     */
    public function aShopWithTheNameShouldExist($arg1)
    {
        throw new PendingException();
    }
}
