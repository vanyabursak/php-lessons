<?php
$x = 12;
echo $x . "<br/>";

function test(){
//    $GLOBALS["x"] += 7;//глобальна переменная
    global $x;//тоже глобальна переменная
    $x += 10;
}
test();
echo $x . "<br/>";