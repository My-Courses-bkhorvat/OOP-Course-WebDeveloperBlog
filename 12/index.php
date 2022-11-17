<?php

class Base
{
    public function sayHello()
    {
        echo "Hello ";
    }
}
trait sayName
{
    public function sayName()
    {
        echo " Bogdan.";
    }
}

trait sayWorld
{
    public function sayHello()
    {
        parent::sayHello();
        echo "world";
    }
}

class MyHelloWorld extends Base
{
    use sayWorld, sayName; //use Hello, Hello; //error
}

$obj = new MyHelloWorld;
$obj->sayHello();
$obj->sayName();

?>