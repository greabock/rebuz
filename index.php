<?php

spl_autoload_register(function ($class) {
    include __DIR__ . '/src/' . $class . '.php';
});


$house = new \HouseModel\House('6th md 1');
$house2 = new \HouseModel\House('6th md 1');

$house->addEntrance(
    (new \HouseModel\Entrance())
        ->addApartment(new  \HouseModel\Apartment())
        ->addApartment(new  \HouseModel\Apartment())
        ->addApartment(new  \HouseModel\Apartment())
        ->addApartment(new  \HouseModel\Apartment())
        ->addApartment(new  \HouseModel\Apartment())
        ->addApartment(new  \HouseModel\Apartment())
        ->addApartment(new  \HouseModel\Apartment())
);


echo $house->getApartmentsCount() . PHP_EOL;


$car = new Car('Mazda CX5', 4, 4, 9.5);

echo $car->calculateFuel(350) . PHP_EOL;
