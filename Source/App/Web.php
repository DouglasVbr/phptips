<?php


namespace Source\App;

use League\Plates\Engine;
use source\Models\User;

class Web
{
private $view;
    public function __construct()
    {
      $this->view = Engine::create(base_dlr: __DIR__."/../../theme", ext:"php");
    }

    public function home(): void
{
    $users = (new User())->find()->fetch(all:true);
    echo $this->view->render(templete_name: "home",[ "title"=> "Home | " .SITE, "users"=>$users]);
    echo "<h1>Web Home</h1>";
    var_dump($data);
}

    public function blog($data)
    {
        echo "<h1>Web blog</h1>";
        var_dump($data);
    }


    public function post($data)
    {
        echo "<h1>Web Artigo</h1>";
        var_dump($data);
    }

    public function category($data)
    {

        echo "<h1>Web Categoria</h1>";
        var_dump($data);
    }


public function contact(): void
 {
echo $this->view->render(template_name: "contact",[
   "title"=>"Contato | " . SITE
]);
var_dump($data);

$url = URL_BASE;
require __DIR__ ."/../../views/contact.php";

 }

    public function error(array $data): void
    {
        echo $this->view->render(template_name:"error",[
            "title"=>"Error{$data['errcode']} |" . SITE,
            "error"=> $data["errcode"]

            ]);
        echo "<h1>Web Erro{$data["errcode"]}</h1>";
        var_dump($data);
    }

}