<?php

class Vehicle {
    public $color;
    public $speed;
    public $brand;

    public function tripTime($distance) {
        $time = $distance / $this->speed;
        return $time;
    }
}

class Bicycle extends Vehicle { //extends - наследование класса Vehicle, можем переопределять типы даных
    public $type;
    public $color = "White"; //переопределения свойства родительского класа
    const CALORIES_PER_HOUR = 500;
    public function caloriesBurned($distance){
        $time = $this->tripTime($distance);
        $calories = $time * self::CALORIES_PER_HOUR;
        return $calories;

    }
    public function tripTime($distance) {     //переопределение методов из родительського  класса
       // $time = ($distance / $this->speed) * 1.2;
        //return $time;
       return parent::tripTime($distance);//(parent)обращаемся к родительському классу
                                            // и вывзываем tripTime метод, оптимизирует код,скоротить
                                            // можем получать доступ к костантам родительского класса
    }
}
//class start{
//    final public function test() {
//
//    }
//}
//class fin extends start {
//    public function test() {      // нельзя переопределить метод потому что он финальний
//                                  //  у родительського класса
//
//    }
//}
                                    //нельзя наследовать  класс когда он финальный