<?php

namespace Kfina\Bewamo\Test\User\End2End;

use Behat\Behat\Context\Context;
use Behat\Behat\Tester\Exception\PendingException;
use Behat\Gherkin\Node\TableNode;
use Doctrine\ORM\EntityManager;
use Interop\Container\ContainerInterface;
use Kfina\Bewamo\Shop\Entity\Shop;
use Kfina\Bewamo\Shop\Entity\ShopInterface;
use Kfina\Bewamo\Shop\Service\ShopServiceInterface;
use Kfina\Bewamo\User\Entity\User;
use Kfina\Bewamo\User\Entity\UserInterface;
use Kfina\Bewamo\User\Service\UserService;
use Kfina\Bewamo\User\Service\UserServiceInterface;
use Zend\ServiceManager\ServiceManager;
use Doctrine\ORM\Tools\SchemaTool;
use PHPUnit\Framework\Assert;

/**
 * Defines application features from the specific context.
 */
class UserE2EContext implements Context
{

    /**
     * @var ContainerInterface
     */
    private $container;
    /**
     * @When I create the following users:
     */
    public function iCreateTheFollowingUsers(TableNode $table)
    {

    }

    /**
     * @Then A user with the email :arg1 and the encrypted pasword :arg2 should exist
     */
    public function aUserWithTheEmailAndTheEncryptedPaswordShouldExist($arg1, $arg2)
    {
        throw new PendingException();
    }

}