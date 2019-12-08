<?php
namespace drmonkeyninja;

class User{

    protected $firstName;

    protected $lastName;
    
    public function setFirstName($firstname){
        $this->firstName = $firstname;
    }

    public function getFirstName(){
        return $this->firstName;
    }

    public function setLastName($lastName){
        $this->lastName = $lastName;
    }

    public function getLastName(){
        return $this->lastName;
    }

    public function getFullName(){
        return trim($this->firstName) . ' ' . trim($this->lastName);
    }

    public function getGenerateEmail(){
        return trim($this->firstName) . '.' . trim($this->lastName) . '@gmail.com';
    }
}