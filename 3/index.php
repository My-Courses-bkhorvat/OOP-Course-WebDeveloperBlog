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

    public function Hello()
    {
        echo "Hello {$this->name}!";
    }

    function getInfo()
    {
        return $this->name.' '.$this->surname.'!';
    }
}

$admin = new User;
$admin->name = "Bohdan";
$admin->surname = "Khorvat";
echo "User: ".$admin->getInfo();

?>

</body>
</html>