<?php
$string = "This is example!";

echo strlen($string) . "</br>";//число символов
echo strpos($string,"is",4) . "</br>";//ищем на совпадение
echo substr($string,4) . "</br>";//возвращает часть строки
echo str_replace("is","abs",$string) . "</br>";//заменняет часть строки
echo htmlspecialchars($string) . "</br>";//Преобразует специальные символы в HTML сущности
echo md5(657) . "</br>";//кодирование строки
echo strtolower($string) . "</br>";//все слова в малом регистре
echo strtoupper($string) . "</br>";//все слова в большом регистр
echo trim($string) . "</br>";//удаляет пробели
echo strstr($string,"i") . "</br>";//возращает участок строки после елемента
echo substr_count($string,"i"). "</br>";//сколько символов в строке
echo str_repeat("hello,",3) . "</br>";//повтор елемента
$str = "one two three for five";
$str_exp = explode(" ", $str);//переводит строку в масив
// теперь $str_exp = array([0] => one, [1] => two,[2] => three, [3] => for, [4] => five)

$str_imp = implode($str_exp);//переводит из масива в строку

$str1 = "Hello, world!";
$str2 =  "Hello!";
$var = levenshtein($str1,$str2);//минимальное число символов, которое требовалось бы заменить, вставить или удалить
                               // для того, чтобы превратить строку str1 в str2.
echo($var);// вернет 7

