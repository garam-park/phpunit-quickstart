<?php

use StoryG\User;
use PHPUnit\Framework\TestCase;

class UserTest extends TestCase
{
    public function testChangeName()
    {
        $user = new User;
        $user->changeName('garam','park');
        $this->assertEquals('garam park',$user->getFullName());
    }
}
