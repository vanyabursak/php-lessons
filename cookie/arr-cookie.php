<?php
$arr = [
    'name' => 'vano',
    'surname' => 'bursak'
];
$resulat = serialize($arr);//переводе масив в строку для куки

$arr = $_COOKIE('arr');//считываем куку

$array = unserialize($arr);//переводим строку в масив