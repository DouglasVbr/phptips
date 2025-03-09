<?php
require __DIR__ . "/vendor/autoload.php";

use CoffeeCode\Router\Router;

$router = new Router(projectUrl: URL_BASE);

$router->group(group: null);



$router->get("/", function ($data) {
    echo "<h1>Hello World</h1>";
    var_dump($data);
});

$router->get("/contato", function ($data) {
    echo "<h1>Contato</h1>";
    var_dump($data);
});


$router->group(group: "ops");
$router->get($router: "/{errcode}", function ($data) {
    echo "h1>Erro {$data["errocode"]}</h1>";
    var_dump($data);
});


$router->dispatch();

if ($router->error()) {
    $router->redirect("/ops");
}