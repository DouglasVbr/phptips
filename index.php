<?php

require __DIR__ . "/vendor/autoload.php";

use Source\Support\Email;

$email = new Email();

$email->add(
    subject: "Olá,  Mundo! Esse é meu primeiro email",
    body: "<h1>Estou apenas testando! </h1> Espero que tenha dado certo!",
    recipient_name: "Douglas Vieira",
    recipient_email: "douglascanal1998@gmail.com"
)->send();

if(!$email->error()){
    var_dump(true);
}else{
    echo $email->error()->getMessage();
}

/*
 *
 *
 *
 *
 *
 *
 *
 */

//$email->add(
//    subject: "Olá,  Mundo! Esse é meu segundo email",
//    body: "<h1>Estou apenas testando! </h1> Espero que tenha dado certo!",
//    recipient_name: "Douglas Vieira",
//    recipient_email: "douglascanal1998@gmail.com"
//)->attachments(
//   filePath: "files/1.jpg",
//   fileName:"FSPHP"
//
//
//
//)->send();
//
//if(!$email->error()){
//    var_dump(true);
//}else{
//    echo $email->error()->getMessage();
//}