<?php


//
//    if(isset($_POST["done"])) {//Isset нажатие на какуюто кнопку затем переходим на ету страницу
//        if ($_POST["name"] == "") {
//            echo "Введите имя. <a href='/'>Исправить</a>";
//        } else {
//            header("Location:index.php");
//        }
//    }
?>

<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Обработка форм</title>

</head>
<body>
    <form name="test" action="check.php"  method="post"><!--action(путь на страницу)-->
        <label>Имя: </label><br/>
        <input type="text" name="name" placeholder="name"><br/>
        <label>Email: </label><br/>
        <input type="text" name="Email" placeholder="Email"><br/>
        <label>Сообщение: </label><br/>
        <textarea name="mesaage" cols="30" rows="10"></textarea><br/>
        <input type="submit" name="done" value="Готово">
    </form>


</body>
</html>

<?php

