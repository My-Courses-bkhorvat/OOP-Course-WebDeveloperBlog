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
    function __construct($name)
    {
        $this->name = $name;
    }

    function getName()
    {
        echo $this->name;
        $this->test();
    }
    public function test() {
        echo 'Test';
    }
}

$user1 = new User('Bohdan');

$user1->getName();

?>

</body>
</html>