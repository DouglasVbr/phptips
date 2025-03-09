<?php

require __DIR__ . "/vendor/autoload.php";

use CoffeeCode\Paginator\Paginator;
use Source\Models\Post;

$post = new Post();
$page = filter_input(type: INPUT_GET, variable_name: "page", filter: FILTER_SANITIZE_STRIPPED);


$paginator = new Paginator(link: "https://www.localhost/phptips/ep01/?page", title:"pagina", first:["primeira pagina", "primeira"], last:["ultima pagina", "ultima"] );
$paginator->pager($post->find()->count(), limit:"3", page: $page, range: 2);

$post = $post->find()->limit($paginator->limit())->offset($paginator->offset())->fetch(true);

echo "<link rel='stylesheet' href='example/style.css'/>";

echo "<p>Pagina {$paginator->page()} de {$paginator->pages()}</p>";

if($post){
    foreach($post as $p){
        echo "<article class='post'><img src='{$post->cover}'/><div><h1>{$post->title}</h1><div>{$post->description}</div></div></article>";
    }
}

echo $paginator->render(cssClass: "pagination");

