<?php
$string = "This is example!";

echo strlen($string);//число символов
echo strpos($string,"is",4);//ищем на совпадение
echo substr($string,4);//возвращает часть строки
echo str_replace("is","abs",$string);//заменняет часть строки
echo htmlspecialchars($string);//Преобразует специальные символы в HTML сущности
echo md5(657);//кодирование строки
echo strtolower($string);//все слова в малом регистре
