<?php


//Инкапсуляция - механизм языка, позволяющий ограничить доступ
// одних компонентов проограмы к другим. Осуществляется ето з  помощю МОДИФИКАТОРОВ ДОСТУПА
                       //Модификатори доступа
//Public(общедоступный) - позволяет получить доступ к свойствам и методам класса из любого места
//Protected(защищенный) - полволяет получить доступ к текущему классу(в котором определен сам член класса), и наследуемым классам
//Private(закрытый) - ограничивает область видимости так, что доступ к члену класса имеет только класс, в котором он обьявлен


//class Base{
//    public $a = "a public";
//    protected $b = "b protected";
//    private $c = "c private";
//
//    function printProperties(){
//        echo "<br/>" . $this->a;
//        echo "<br/>" . $this->b;
//        echo "<br/>" . $this->c;
//    }
//}
//$obj = new Base();
//echo "<dr/>" . $obj->a;//Работает
////echo "<dr/>" . $obj->b;//Неисправная ошибка
////echo "<dr/>" . $obj->c;//Неисправная ошибка
//echo "<hr/>";
//echo $obj->printProperties();//Выводит public protected private


    class Base{
        public $a = "a public";
        protected $b = "b protected";
        private $c = "c private";


    }

    class Inherited extends Base {

        function printProperties() {
            echo "<br/>" . $this->a;
            echo "<br/>" . $this->b;//работает у наследника
            //echo "<br/>" . $this->c;
        }
    }

    $obj2 = new Inherited();
    echo "<dr/>" . $obj2->a;//Работает
    //echo "<dr/>" . $obj2->b;//Неисправная ошибка
    //echo "<dr/>" . $obj2->c;//неопределен
    echo "<hr/>";
    echo $obj2->printProperties();//Выводит public protected, а private невыводит, потомучто php невидет
