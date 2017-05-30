<?php

namespace Kfina\Bewamo\Test\Shop\Domain;

use Behat\Behat\Context\Context;
use Behat\Behat\Tester\Exception\PendingException;
use Behat\Gherkin\Node\TableNode;

/**
 * Defines application features from the specific context.
 */
class ShopDomainContext implements Context
{
    /**
     * Initializes context.
     *
     * Every scenario gets its own context instance.
     * You can also pass arbitrary arguments to the
     * context constructor through behat.yml.
     */
    public function __construct()
    {
    }

    /**
     * @Given The following users exist:
     */
    public function theFollowingUsersExist(TableNode $table)
    {
        throw new PendingException();
    }

    /**
     * @When I create the following shop for the user :arg1:
     */
    public function iCreateTheFollowingShopForTheUser($arg1, TableNode $table)
    {
        throw new PendingException();
    }

    /**
     * @Then A shop with the name :arg1 should exist
     */
    public function aShopWithTheNameShouldExist($arg1)
    {
        throw new PendingException();
    }

}
