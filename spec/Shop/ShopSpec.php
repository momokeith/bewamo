<?php

namespace spec\Kfina\Bewamo\Shop;

use Kfina\Bewamo\Shop\Shop;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class ShopSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(Shop::class);
    }
}
