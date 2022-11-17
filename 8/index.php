<?php

class User
{
    public static $name;

    public static function hello()
    {
        echo "Hello " . self::$name;
    }

}

user::$name = "Bohdan!";
user::hello();
echo user::$name;
