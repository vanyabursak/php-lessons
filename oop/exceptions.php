<?php
$files = 'inheritance.php';

//if (!file_exists($files)) {
//    throw new Exception("File not found");//кинуть исключение
//}
//чтобы зловить исключение нужна функция try catch
try{
    if (!file_exists($files)) {
        throw new Exception('File not found');
    }

}catch (Exception $e) {                 //в catch записываем условие(Exception и екземпляр даного класса $e)
    echo$e->getMessage();
}
?>

<?php
try {
    throw new Exception;
} catch(Exception $e) {
    echo $e->getFile();   //getFile-Возвращает имя файла, в котором исключение было создано.
                          //Результатом выполнения данного примера будет что-то подобное: /home/bjori/tmp/ex.php
                                                    //

}
?>
<!--            getLine-Возвращает номер строки, где было создано исключение-->
<?php
try {
    throw new Exception("Какое-нибудь сообщение об ошибке");
} catch(Exception $e) {
    echo "Исключение было создано на строке: " . $e->getLine();//.Результатом выполнения данного примера будет что-то подобное:
                                                                                                                                                  // Исключение было создано на строке: 3
}
?>

<!--Пример #1 Пример использования Exception::getTrace()-->

<?php
function test() {
    throw new Exception;
}

try {
    test();
} catch(Exception $e) {
    var_dump($e->getTrace());
}
?>
Результатом выполнения данного примера будет что-то подобное:

array(1) {
[0]=>
array(4) {
["file"]=>
string(22) "/home/bjori/tmp/ex.php"
["line"]=>
int(7)
["function"]=>
string(4) "test"
["args"]=>
array(0) {
}
}
}




    Возвращает трассировку стека исключения в виде строки.
<?php
function teest() {
    throw new Exception;
}

try {
    test();
} catch(Exception $e) {
    echo $e->getTraceAsString();
}
//Результатом выполнения данного примера будет что-то подобное:

#0 /home/bjori/tmp/ex.php(7): test()
#1 {main}
?>



Возвращает исключение в виде строки (string).
<?php
try {
    throw new Exception("Какое-нибудь сообщение об ошибке");
} catch(Exception $e) {
    echo $e;
}

//Результатом выполнения данного примера будет что-то подобное:
//
//exception 'Exception' with message 'Какое-нибудь сообщение об ошибке' in /home/bjori/tmp/ex.php:3
//Stack trace:
//#0 {main}
?>
