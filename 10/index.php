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

?>

</body>
</html>