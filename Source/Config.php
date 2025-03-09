<?php
//const DATA_LAYER_CONFIG = [
//    "driver" => "mysql",
//    "host" => "localhost",
//    "port" => "3306",
//    "dbname" => "datalayer",
//    "username" => "root",
//    "passwd" => "",
//    "options" => [
//        PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
//        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
//        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,
//        PDO::ATTR_CASE => PDO::CASE_NATURAL
//    ]
//];



//const DATA_LAYER_CONFIG = [
//    "driver" => "pgsql",
//    "host" => "localhost",
//    "port" => "5432",
//    "dbname" => "datalayer",
//    "username" => "postgres",
//    "passwd" => "123456",
//    "options" => [
//        PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
//        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
//        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,
//        PDO::ATTR_CASE => PDO::CASE_NATURAL
//    ]
//];

define("URL_BASE", "http://localhost/phptips/ep01");

//HOSTS SMTP
define("MAIL_A",[
    "host" => "mail.upinside.com.br",
    "port" => "465",
    "user" => "phptips@upinside.com.br",
    "passwod" => "@5U4z-N_ieIS",
    "from_name" => "Douglas",
    "from_email" => "douglas@gmail.com"
]);

//SENDGRID
define("MAIL_B",[
    "host" => "smtp.sendgrid.net",
    "port" => "587",
    "user" => "apikey",
    "passwod" => "SG.8ey5h60xSZaF4FBC8GkrOw.qgH0xZnkzrJaafcKwCKEsmObZxL_te9UdjiwYycemSIQ",
    "from_name" => "Douglas",
    "from_email" => "douglas@gmail.com"
]);

//Aws SES
define("MAIL",[
    "host" => "email-smtp.us-east-1.amazonaws.com",
    "port" => "587",
    "user" => "AKIAJ3Q234567890",
    "passwod" => "BIZ234567890",
    "from_name" => "Douglas",
    "from_email" => "douglas@gmail.com"
]);

const DATA_LAYER_CONFIG = [
    "driver" => "mysql",
    "host" => "localhost",
    "port" => "3306",
    "dbname" => "phptips",
    "username" => "root",
    "passwd" => "",
    "options" => [
        PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,
        PDO::ATTR_CASE => PDO::CASE_NATURAL
    ]
];

