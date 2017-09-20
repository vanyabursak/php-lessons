<?php
class Car{
    public $color = 'white';
    public $speed;
    public $Fuel;
    public $brand;

    public function __construct($brand = 1, $speed = 1, $fuel = 21, $color = 21){ //конструктор(аргументы = значения по умолчанию)
        $this->brand = $brand;
        $this->speed = $speed;
        $this->fuel = $fuel;
        $this->color =  $color;
//        echo $color;
    }
    public function tripTime($distanse){
        $time = $distanse / $this->speed;
        return $time;
    }
}
$car1 = new Car("Audi", 110, 12, "Yellow");
$car3 = new Car("BMW", 300, 12, "Yellow");


echo "<br>car 1 time:" . $car1->tripTime(1000);
echo "<br>car 3 time:" . $car3->tripTime(1000);

$car2 = new Car;
//$car2->brand = "Mersedes";
//$car2->speed = 130;
//$car2->Fuel = 14;
//$car2->color = "Black";
//
////echo $car2->color;
//
echo "<br>car 2 time:" . $car2->tripTime(1000);