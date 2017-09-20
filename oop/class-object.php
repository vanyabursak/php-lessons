<?php
class Car{                    //создание класса
    public $color = 'white';    // ето свойство будет по умолчанию у обьекта
    public $speed;            //переменные являються членами класа называються(СВОЙСТВАМИ)
    public $Fuel;
    public $brand;

    public function test(){   //функции ето методи
        echo "<br>test function";
    }
    public function tripTime($distanse){
        $time = $distanse / $this->speed;  //(this->)являетяся псевдо переменной и является ссилкой на обект которий визивает етот метод
        return $time;
    }
}
$car1 = new Car;                 //обьекти етого класса(екземпляри)
$car1->brand = "Audi";            //задайом обекту такие свойства(->)
$car1->speed = 110;
$car1->Fuel = 12;


//$car1->test();                      //вызываем функцию


$car2 = new Car;
$car2->brand = "Mersedes";            //задайом обекту такие свойства(->)
$car2->speed = 130;
$car2->Fuel = 14;
$car2->color = "Black";

//echo $car2->color;               //считываем значения свойства
echo "<br>car 1 time:" . $car1->tripTime(1000);
echo "<br>car 2 time:" . $car2->tripTime(1000);