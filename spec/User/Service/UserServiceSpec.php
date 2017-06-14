<?php

namespace spec\Kfina\Bewamo\User\Service;

use Kfina\Bewamo\User\Entity\UserInterface;
use Kfina\Bewamo\User\Repository\RepositoryInterface;
use Kfina\Bewamo\User\Service\UserService;
use PhpSpec\ObjectBehavior;
use PHPUnit\Framework\Assert;
use Prophecy\Argument;

class UserServiceSpec extends ObjectBehavior
{
    function let(
        RepositoryInterface $repository
    )
    {
        $this->beConstructedWith($repository);
    }

    function it_creates_a_user(
        UserInterface $userToCreate,
        UserInterface $userCreated,
        RepositoryInterface $repository
    ){
        $repository->create($userToCreate)->willReturn($userCreated);
        $userCreated->getId()->willReturn(1);

        // Assert
        $this->create($userToCreate)->shouldReturn($userCreated);
        //Assert::assertTrue($userCreated->getId() == 1);
    }
}
