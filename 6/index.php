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

final class User
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
        $information = "{$this->name}" . "{$this->password}" . "{$this->email}" . "{$this->city}";

        return $information;
    }
}

class Moderator extends User
{
    public $info;
    public $rights;

    public function __construct($name, $password, $email, $city, $info, $rights)
    {
        parent::__construct($name, $password, $email, $city);
        $this->info = $info;
        $this->rights = $rights;
    }

    public function getInfo()
    {
        $information = parent::getInfo();
        $information .= "{$this->info}" . "{$this->rights}";

        return $information;
    }

}

$moder = new Moderator('Bohdan', '123', 'bohdan@gmail.com', 'Krakow', 'Moderator', 'true');

echo $moder->getInfo();


class Test
{
    protected $info;
}

class Test2 extends Test
{
    final public function test()
    {
        $this->info = 'info';
        echo $this->info;
    }
}

$test2 = new Test2();
$test2->test();
//$test->info = "information"; // dont work because $info is protected
?>

</body>
</html>