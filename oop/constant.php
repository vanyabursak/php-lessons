<?php
class Car {
    const WHEELS = 4;   // создание константы

    public function test(){
        echo Car::WHEELS; //вызов внутри класса
        echo self::WHEELS; //вызов внутри класса
    }
}

class Bicycle {
    const WHEELS = 2;

    public function test(){
        echo Car::WHEELS; //вызов внутри класса
        echo self::WHEELS; //вызов внутри класса
    }
}
//echo Car::WHEELS;    // вызов константы
//echo Bicycle::WHEELS;
//$car1 = new Car;
//$car1->test();
$b = new Bicycle;
$b->test();        //выводится  echo Car::WHEELS;-4 echo self::WHEELS;-2 тоесть42