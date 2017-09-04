<?php
$array = [1,3,134,4,5,7,14];
echo count($array);//скока елементов в масиве
echo  "<br/>";
sort($array);//сортирует по увелечине елемент
var_dump($array);
echo  "<br/>";

rsort($array);//сортирует по убиванию елемент
var_dump($array);
echo  "<br/>";


asort($array);//сортирует по увелечине c ключом
var_dump($array);
echo  "<br/>";


arsort($array);//сортирует по убиванию c ключом
var_dump($array);
echo  "<br/>";


ksort($array);//сортирует по увелечению только ключи
var_dump($array);
echo  "<br/>";

krsort($array);//сортирует по убиванию только ключи
var_dump($array);
echo  "<br/>";

shuffle($array);//рандомне перебирання елементов масива
var_dump($array);
echo  "<br/>";

echo in_array(12,$array);//проверяет есть ли такой элемент в массиве
var_dump($array);
echo  "<br/>";

$array1 = [2,5,6];
$array2 = [0,1,3,];
$array3 = array_merge($array1,$array2);//слияние масивов
var_dump($array3);
echo  "<br/>";

$slice = [355,77,2,3,4,5,5,1,6,7];
var_dump($slice);
echo  "<br/>";
$slice = array_slice($slice,3,4);//обрезание массива
var_dump($slice);
echo  "<br/>";
$unset = [356,353,6,];//удаление елемента
 unset($unset[1]);
var_dump($unset);
echo  "<br/>";
$ter = [5,6,7,3,1,24,];
natsort($ter);//естествина сортировка
var_dump($ter);



