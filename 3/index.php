<?php

class User
{
    public $name = "name";
    private $password = "password";
    public $email = "email";
    protected $city = "city";

    public function Hello()
    {
        echo "Hello {$this->name}!";
    }

    function getInfo()
    {
        return $this->name . ' ' . $this->surname . '!';
    }
}

$admin = new User;
$admin->name = "Bohdan";
$admin->surname = "Khorvat";
echo "User: " . $admin->getInfo();
