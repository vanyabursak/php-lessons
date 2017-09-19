<?php

if (isset($_POST['name']) && (!empty($_POST['name']))){
    $name = $_POST['name'];
    setcookie('name',$name, time() + 7);
} elseif (isset($_COOKIE['name'])){
    $name = $_COOKIE['name'];
}
else {
    $name = 'Гость';
}

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title> страница Index.php </title>
    </head>
    <body>
        <h1> Страница index.php </h1>
        <a href="page.php"> Страница page.php </a>
        <br><br>
        <p>Привет, <?php echo $name;?></p>
        <form method="post">
            <input type="text" name='name'/>
            <input type="submit"/>
        </form>
    </body>
</html>
