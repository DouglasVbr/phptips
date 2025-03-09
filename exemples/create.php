<?php

require __DIR__ . "/../vendor/autoload.php";


use Source\Models\User;
use Source\Models\Address;

$user = new User();
$user->first_name = "Douglas";
$user->last_name = "Vieira";
$user->genre = "M";
$user->save();

$addr = new Address();
$addr->add($user, street: "Nome da rua", number: "22b");
$addr->save();



var_dump($user);