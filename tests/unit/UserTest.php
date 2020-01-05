<?php

class UserTest extends \PHPUnit\Framework\TestCase
{

    public function testThatWeCanGetTheFirstName()
    {
        $user = new \App\Models\User;
        $firstName = "Clement";
        $user->setFirstName($firstName);
        $this->assertEquals($user->getFirstName(), $firstName);
    }

    public function testThatWeCanGetTheLastName()
    {
        $user = new \App\Models\User;
        $lastName = "Barbaza";
        $user->setLastName($lastName);
        $this->assertEquals($user->getLastName(), $lastName);
    }

    public function testThatWeCanGetTheEmail()
    {
        $user = new \App\Models\User;
        $email = "clement@example.com";
        $user->setEmail($email);
        $this->assertEquals($user->getEmail(), $email);
    }

}