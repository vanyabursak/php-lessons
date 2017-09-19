<?php
session_start();
$answer1 = $_SESSION['answer1'];
$answer2 = $_SESSION['answer2'];
$answer3 = $_POST['answer3'];

if(($answer1 == 4) && ($answer2 == 6) && ($answer3 == 8)){
    echo '+';
} else {
    echo '-';
}

 //echo  session_id()//выводит идентификатор сесии
?>

<p>ваш результата</p>