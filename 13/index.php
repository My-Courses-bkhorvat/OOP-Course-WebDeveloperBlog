<?php

class User
{
    private $name;
    private $city;
    private $id;

    public function __construct($name, $city)
    {
        $this->name = $name;
        $this->city = $city;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function __clone()
    {
        $this->id = 0;
    }
}

$user1 = new User('Bogdan', 'Krakow');
$user1->setId('123');
$user2 = clone $user1;

var_dump($user1);
var_dump($user2);

?>