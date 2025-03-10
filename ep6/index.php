<?php
ob_start();

require __DIR__ . "/vendor/autoload.php";

if (empy($_SESSION["userLogin"])){
    echo"<h1>Gest</h1>";

    /*AUTH FACEBOOK*/
    $facebook = new \League\OAuth2\Client\Provider\Facebook([
        'clientId'          => FACEBOOK["app_id"],
        'clientSecret'      => FACEBOOK["app_secret"],
        'redirectUri'       => FACEBOOK["app_redirect"],
        'graphApiVersion'   => FACEBOOK["app_version"],
    ]);

    $authUrl = $facebook->getAuthorizationUrl([
"scope"=>["email"]


    ]);

    $error = filter_input(type: INPUT_GET, variable_name: "error", filter: FILTER_SANITIZE_STRIPPED);

    if($error){

        echo $error. "voce precisa autorizar para continuar";


    }


    $code = filter_input(type: INPUT_GET, variable_name: "error", filter: FILTER_SANITIZE_STRIPPED);
    if($code){
        $token = $facebook->getAccessToken(grant:"authorization_code", [
            "code" => $code
        ]);

        $_SESSION["userLogin"] = $facebook->getResourceOwner($token);
        header(string:"Refresh: 0 ");

    }



    echo"<a title='FB Login' href='{$authUrl}' > Facebook Login</a>";


}else{
    /* @var $user \League\OAuth2\Client\Provider\FacebookUser */
    $user = $_SESSION["userLogin"];
    echo"<img width ='120' alt='' src='{$user->getPictureUrl()}'></img> <h1>User Name</h1>";
    var_dump($user);

    echo "<a title='Sair' href='?off=true'>Sair</a>";
    $off = filter_input(INPUT_GET, "off", FILTER_VALIDATE_BOOLEAN);

    if($off)
    {
       unset($_SESSION["userLogin"]);
        header(string:"Refresh: 0 ");
    }

}



ob_end_flush();