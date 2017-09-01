<?php
$array = [1,3,134,4,5,7,14];
echo count($array);//скока елементов в масиве

sort($array);//сортирует по увелечине
print_r($array);
echo  "<br/>";

rsort($array);//сорирует по убиванию
print_r($array);
echo  "<br/>";


asort($array);//сортирует по увелечине c ключом
print_r($array);
echo  "<br/>";


arsort($array);//сортирует по убиванию c ключом
print_r($array);
echo  "<br/>";


ksort($array);//сортирует по увелечению только ключи
print_r($array);
echo  "<br/>";

krsort($array);//сортирует по убиванию только ключи
print_r($array);
echo  "<br/>";

shuffle($array);//рандомне перебирання елементов масива
print_r($array);
echo  "<br/>";

echo in_array(12,$array);//проверяет есть ли такой элемент в массиве
print_r($array);
echo  "<br/>";

$array1 = [2,5,6];
$array2 = [0,1,3,];
$array3 = array_merge($array1,$array2);//слияние масивов
print_r($array3);



                        //асоцыативные масивы

