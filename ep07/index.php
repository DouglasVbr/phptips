<?php

require __DIR__ . "/vendor/autoload.php";

$route = new \CoffeCode\Router\Router(projectUrl: ROOT);

/*app*/


$route->namespace(namespace: "Source\App");

/*web*/
$route->group(group:null);
$route->get(route:"/", hand: "web:contact");
$route->get(route: "/contato", handle:" web:contact");

/*ERROR*/
$route->group(group:"ops");
$route->get(route:"/{errcode}", handler: "web:error");

/*PROCESS*/

$route->dispatch();

if($route->error()) {
    $route->redrect(route:"/ops{$route->error()}");

}else{
    $route->call($route->handler());

}




