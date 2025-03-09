<?php

require __DIR__ . "/../vendor/autoload.php";


use Source\Models\User;


$user = (new user())->findById(5);
$user->first_name = "Joel";
$user->save();
var_dump($user);