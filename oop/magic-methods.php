<?php
class User {
   public $name;
   public $city;
   public $id;

   public function __construct($name, $city)
   {
       $this->name = $name;
       $this->city = $city;
   }
   function setId($id) {
       $this->id = $id;
   }

   public function __clone()
   {
        $this->id = 0;
   }
}
$user1 = new User("Alexey","kiev");
$user1->setId(3245);  // name=Alexey   city=kiev  id=3245
$user1 = clone $user1;// name=Alexey   city=kiev  id=0

class Room {
    public function __construct()
    {
        echo "обьект создан" . "<br/>";
    }
    public function __invoke()
    {
        echo "мы обратились к обьекту как к функции" . "<br/>";
    }
    public function __toString()
    {
        echo "мы обратились к обьекту как к строке";
    }
}
$myRoom = new Room();//выводится "обьект создан"
$myRoom();//выводится "мы обратились к обьекту как к функции"
echo $myRoom;//выводится "мы обратились к обьекту как к строке"
