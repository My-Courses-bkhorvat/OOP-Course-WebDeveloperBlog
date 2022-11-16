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
    private static $name;

    public static function setName($name1)
    {
        self::$name = $name1;
    }

    public static function getName()
    {
        return self::$name;
    }
}
User::setName('Ivan');
echo User::getName();

?>

</body>
</html>