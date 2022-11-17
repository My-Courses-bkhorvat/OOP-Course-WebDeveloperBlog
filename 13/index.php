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

class GetSet
{
    private $number = 1;

    public function __get($name)
    {
        echo "You get {$name}";
    }

    public function __set($name, $val)
    {
        echo "You set {$name} to ";
    }

}

$obj = new GetSet();
echo $obj->number;
echo $obj->number = 689;
