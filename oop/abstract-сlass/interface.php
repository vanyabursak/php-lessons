<?php
//Интерфейс - ето инструмент, который указывает какие методы должен включить класс,
// без необходимости описания их функционала в самом интерфейсе
                        //Интерфейс

    //Абстрактный класс                            //Интерфейс

      // - свойства                                // -
      // - методы с реализацией                    // -
      // - обявляет методы без реализации          // - обявляет методы без реализации
      // - создание екземпляров невозможно         // - создание екземпляров невозможно
      // - наследуется (extends)                   // - реализутся (implements)
      // - наследник имеет только одного родителя  // - наследник может реализовать методы
                                                         //нескольких интерфейсов
      // -                                         // - все методы должны быть public

//Отличие интерфейса в том что он несет чисто описательный характер
// в отличии от абстрактного класса который может вкл реализацию методов


     //Когда использовать абстрактный класс когда интерфейс
//Если мы хотим описать только роботу класса потомка тогда ИНТЕРФЕЙС,
// а когда мы можем реализовать общие методи тогда тогда АБСТРАКТНЫЙ КЛАСС

interface Vehicle{   //создание интерфейса
    public function info();//создание методы без реализации
}

interface Car extends Vehicle{
    public function drive();
}

interface Boat extends Vehicle{
    public function swim();
}

//class Audi implements Car{  //добавили class Audi,
//                            //при помощи слова implements мы указали что Audi реализует интерфейс Car
//
//    public function info()  //и нужно реализовать все методы из интерфейса Car, если нереализуеш будет ошибка
//    {
//        echo "<br/>Audi is a German automobile manufacturer.";
//    }
//
//    public function drive()
//    {
//        echo "<br/> Audi drive";
//    }
//}
//$audi1 = new Audi;
//$audi1->info();
//$audi1->drive();

class MercedesAmphibious implements Car, Boat{ // реализует сразу два интерфейса, должен реализововать методы обоих
    public function info()
    {
       echo "<br/>Mercedes is a German automobile manufacturer";
    }
    public function drive()
    {
        echo "<br/>Mercedes drives";
    }
    public function swim()
    {
        echo "<br/>Mercedes swim";
    }
}

$MercedesAmphibious1 = new MercedesAmphibious;
$MercedesAmphibious1->info();
$MercedesAmphibious1->drive();
$MercedesAmphibious1->swim();