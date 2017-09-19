<?php

if (isset($_COOKIE['name'])){
 //$name = $_COOKIE['name'];
    setcookie('name','');//удаления куки
    setcookie('name','ффы',time() - 46245);//удаления куки
}
else{
    $name = 'Гость';
}

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Title</title>
    </head>
    <body>

        <h1> Страница page.php </h1>
        <p>Привет, куки удалены <?php// echo $name;?></p>
        <a href="index.php"> Страница index.php </a>

    </body>
</html>
