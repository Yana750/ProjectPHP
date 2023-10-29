<?php
declare(strict_types=1);

require_once 'oop/AbstractCar.php';
require_once 'oop/ThreeDoorCar.php';

function foo(int $intVar)
{
    echo 5;
}

foo((int) '5');
//$myCar = new ThreeDoorCar('yellow');
//echo $myCar::getDoorCount();
//var_dump($myCar);
