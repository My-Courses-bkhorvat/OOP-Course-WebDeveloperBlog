<?php

abstract class User
{
    public $name;
    public $status;

    abstract public function getStatus();
}

//$user1 = new User(); //Error! Cannot instantiate abstract class.

class Admin extends User
{
    public function getStatus()
    {
        echo "Admin";
    }
}

$user1 = new Admin();
$user1->getStatus();
