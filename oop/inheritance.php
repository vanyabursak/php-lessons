<?php

class Vehicle{
    public $color;
    public $speed;
    public $brand;

    public function tripTime($distance) {
        $time = $distance / $this->speed;
        return $time;
    }
}

class Bicycle extends Vehicle { //extends - наследование класса Vehicle
    public $type;
}

class Car extends Vehicle {
    public $fuel;

    public function fuelConsumption($distance) {
        $result = ($this->fuel * $distance) / 100;
        return $result;
    }
}

$car1 = new Car;
$car1->speed = 110;
$car1->fuel = 12;

$car2 = new Car;
$car1->speed = 130;
$car1->fuel = 14;

$bicycle = new Bicycle;
$bicycle->speed = 20;

echo "<br>Car1 time:".$car1->tripTime($distance);
echo "<br>Car2 time:".$car2->tripTime($distance);
echo "<br>bicycle time:".$bicycle->tripTime($distance);

