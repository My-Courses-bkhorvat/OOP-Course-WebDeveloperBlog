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
?>

</body>
</html>