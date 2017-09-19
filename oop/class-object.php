<!DOCTYPE>
<html>
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>


<?php


class User {
    public $name = "имя";
    public $password = "пароль";
    public $email = "емейл";
    public $city = "город";
}
$admin = new User();
$user1 = new User();

$admin->name="Алех";
$user1->name="Андрей";

echo $admin->name;
echo $user1->name;



//Class ShoppingCard {
//     private $name;
//
//     public function naming(){
//         $this -> name = "Адидас";
//         echo  $this -> name;
//     }
//}

//$product = new ShoppingCard;
//$product->naming()
//$product->name = "nike";//невыведем потому шо приватный
//




//$product1 = new ShoppingCard();//екземпляр класса - ето и есть обьект
//$product2 = new ShoppingCard();
//$product3 = new ShoppingCard();
//
//var_dump($product1 instanceof ShoppingCard );//instanceof- проверка являеться ли обект екземпляром конкретного нужного нам класса
//var_dump($product2 instanceof Card);
//var_dump($product3);

?>


</body>
</html>

