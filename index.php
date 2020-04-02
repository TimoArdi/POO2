<?php
// index.php
require_once 'Bicycle.php';
require_once 'Car.php';
require_once 'Truck.php';
$bike = new Bicycle(bleue,15);
$mustang = new Car(noire,2,fuel);
$bmw = new Car(blanche,5,electric);
$bicycle = new Bicycle('blue', 1);
$monster = new Truck(red,8,fuel,500);
echo $monster->is_full();
$monster->setchargement(500);
echo $monster->is_full();
echo $monster->forward();
echo $monster->brake();
