<?php

use drmonkeyninja\User;
use PHPUnit\Framework\TestCase;

class UserTest extends TestCase{

    protected $user;

    public function setUp()
    {
        $this->user = new User();
    }
    

    public function testThatWeCanFirstName(){
        $this->user->setFirstName('hamza');
        $this->assertEquals($this->user->getFirstName(), 'hamza');
    }

    public function testThatWeCanLastName(){
        $this->user->setLastName('elghanoui');
        $this->assertEquals($this->user->getLastName(), 'elghanoui');
    }

    public function testThatFullNameRuterned(){
        $this->user->setFirstName('hamza');
        $this->user->setLastName('elghanoui');
        $this->assertEquals($this->user->getFullName(), 'hamza elghanoui');
    }

    public function testFirstNameAndLastNameAreTrimed() {
        $this->user->setFirstName('     hamza');
        $this->user->setLastName('elghanoui    ');
        $this->assertEquals($this->user->getFullName(), 'hamza elghanoui');
    }

    public function testGenerateEmailThatsTrue() {
        $this->user->setFirstName('hamza');
        $this->user->setLastName('elghanoui');
        $this->assertEquals($this->user->getGenerateEmail(), 'hamza.elghanoui@gmail.com');
    }
}