<?php
require __DIR__ . "/vendor/autoload.php";

use CoffeeCode\Router\Router;

$router = new Router(projectUrl: URL_BASE);

/*Controllers*/
$router->namespace(namespace: "Source\App");

/* Web
* Home
*/
$router->group(group: null);
$router->get(route: "/", handler: "Web::home");
$router->get(route: "/{filter}", handler: "Web::home");
$router->get(route: "/{filter}/{page}", handler: "Web::home");


/*Blog*/
$router->group(group: "blog");
$router->get(route: "/", handler: "Web:blog");
$router->get(route: "/{post_uri}", handler: "Web:post");
$router->get(route: "/categoria/{cat_uri}", handler: "Web:category");

/*Contato*/
$router->group(group: "contato");
$router->get(route: "/", handler: "Web:contact");
$router->post(route: "/", handler: "Web:contact");
$router->delete(route: "/", handler: "Web:contact");
$router->get(route:"/{sector}", handler: "Web:contact");

/*ADMIN*
HOME*/
$router->group(group: "admin");
$router->get(route: "/", handler: "Admin:home");
$router->get(route: "/{page}", handler: "Admin:home");


/*ERROS*/
$router->group(group: "ooops");
$router->get(route: "/{errcode}", handler: "Web:error");

$router->dispatch();

if ($router->error()) {
    $router->redirect("/ooops{$router->error()}");
}