<?php

require __DIR__ . "/../vendor/autoload.php";

//use CoffeeCode\DataLayer\Connect;

//$conn = Connect::getInstance();
//$error = Connect::getError();

//if ($error){
    //echo $error->getMessage();
    //die();
//}

//$query = $conn->query("SELECT * FROM users");
//var_dump($query->fetchAll());

$user = new User();
$list =  $user->find()->fetch(true);

/** @var  $userItem User */
foreach ($list as $useritem){
    var_dump($useritem->data());
    foreach ($useritem->addresses() as $address){
        var_dump($address->data());
    }
}