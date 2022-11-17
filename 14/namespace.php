<?php

require_once 'index.php';

use newClass\Home as Home;
use same\namespace\{ClassA, ClassB};
use function same\namespace\{fnA, fnB};
use const same\namespace\{constA, constB};

$obj =  new \Home\User('Bogdan', 'Krakow');

var_dump($obj);
