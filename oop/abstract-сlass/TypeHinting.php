<?php
// class Student {
//     public $name;
//     public $results;
//
//     function __construct($name, array $results) //чтобы указать что метод __construct ожидает масив нужно записать array, чтобы была отлавливаемая ошыбка
//     {
//         echo '<br/>Student' . $name . ':';
//         foreach ($results  as $subject => $item) {
//             echo '<br/>' . $subject . ':' . $item;
//         }
//         echo "<hr/>";
//     }
// }
// $student1 = new Student("Jonh", ["math" => 3,"biology" => 4]);
// $student2 = new Student("Marry", ["math" => 4,"biology" => 4]);
//
// $student3 = new Student("Mark", 1); //ошыбка! неправельный аргумент передан для форыч
//

class  User{

    public $firstname;
    public $lastname;
}

function getFullName(User $user) { //передается обект екземпляра user
    return $user->firstname . $user->lastname;
}

$user1 = new User;
$user1->firstname = 'Alex';
$user1->lastname = 'Jones';

echo getFullName($user1);
echo getFullName('string');