<?php

class User
{
    function __construct($name, $password, $email, $city) // function User - this is constructor in old php
    {
        $this->name = $name;
        $this->password = $password;
        $this->email = $email;
        $this->city = $city;
    }

    function getInfo()
    {
        echo "{$this->name}" . "{$this->password}" . "{$this->email}" . "{$this->city}";
    }
}

$user1 = new User('Bohdan', 'qwerty', 'admin@gmail.com', 'Kiev');

$user1->getInfo();

class DestructibleClass
{
    function __construct()
    {
        print "Construct";
        $this->name = "DestructibleClass";
    }

    function __destruct()
    {
        print "Destruct " . $this->name;
    }
}

$obj = new DestructibleClass();

echo "Here";
