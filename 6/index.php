<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php

class User
{
    function __construct($name, $password, $email, $city)
    {
        $this->name = $name;
        $this->password = $password;
        $this->email = $email;
        $this->city = $city;
    }

    function getInfo()
    {
        echo "{$this->name}"."{$this->password}"."{$this->email}"."{$this->city}";
    }
}

class Moderator extends User {
    public $info;
    public $rights;
}
$moder = new Moderator('Bohdan', '123', 'bohdan@gmail.com', 'Krakow');

$moder->getInfo();
?>

</body>
</html>