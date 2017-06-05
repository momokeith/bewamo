<?php

namespace Kfina\Bewamo\Test\Shop\End2End;

use Behat\Behat\Context\Context;
use Behat\Gherkin\Node\TableNode;
use Doctrine\ORM\EntityManager;
use Interop\Container\ContainerInterface;
use Kfina\Bewamo\Shop\Entity\Shop;
use Kfina\Bewamo\Shop\Entity\ShopInterface;
use Kfina\Bewamo\Shop\Service\ShopServiceInterface;
use Kfina\Bewamo\User\Entity\User;
use Kfina\Bewamo\User\Entity\UserInterface;
use Kfina\Bewamo\User\Service\UserServiceInterface;
use Zend\ServiceManager\ServiceManager;
use Doctrine\ORM\Tools\SchemaTool;
use PHPUnit\Framework\Assert;

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
     * @Then A shop with the name :shopName should exist
     */
    public function aShopWithTheNameShouldExist($shopName)
    {
        /** @var $shopService ShopServiceInterface */
        $shopService = $this->container->get(ShopServiceInterface::class);

        $shops = $shopService->findShopWithName($shopName);

        $result = array_filter($shops,function(ShopInterface $shop) use ($shopName){
            return $shop->getName() == $shopName;
        });

        Assert::assertTrue(count($result) > 0 );

    }

    /**
     * @BeforeScenario
     */
    public function prepareDatabase()
    {
        /** @var $entityManager EntityManager */
        $entityManager = $this->container->get(EntityManager::class);
        $tool = $this->container->get(SchemaTool::class);

        $metaData = $entityManager->getMetadataFactory()->getAllMetadata();

        $tool->dropSchema($metaData);
        $tool->createSchema($metaData);
    }
}