<?php

class User
{
    public $name = "name";
    private $password = "password";
    public $email = "email";
    protected $city = "city";
}

$admin = new User;
//echo $admin->name;

$user1 = new User;
$admin->name = "Andrew";
$user1->name = "Olek";

echo $admin->name;
echo $user1->name;

$user1->surname = "Ivanov";
echo $user1->surname;