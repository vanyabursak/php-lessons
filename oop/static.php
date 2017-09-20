<?php
class Car{
    public static $engine = 1;    //static вызывается тогда когда обозначает сам клас
    public static function whatIsIt(){
        echo "Автомобиль-моторное дорожное средство";
    }
}

echo Car::$engine;                  //вызывается static свойство
Car::whatIsIt();                    //вызывается static методы