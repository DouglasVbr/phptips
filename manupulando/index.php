<?php



include __DIR__ . "/style.css";

echo '<h1>JSON em PHP</h1>';

$array = [
    'name' => 'douglas',
    'canal' => 'youtube',
    'htmll' => '<p>teste123</p>',
    'caracteres' => '\'teste\' & "teste2"',
    'categoria' => 'programação',
    'linguagens' => [
        'php', 'javascript', 'html'
    ],
    'filtros' => [
        'php' => ' Linguagem php',
        'editor ' => 'phpstorm',
        'css' => 'linguagem de estilização css'
    ],
    'numeros' => [1,
        2,
        3,
        4,
        5,
        6,
        7,
        8,
        9,
        10,
        10.00],

];

$object  = new stdClass();
$object->name = "douglas";
$object->canal = "youtube";

echo "<pre>";
print_r($array);
echo "</pre>";

echo "<hr>";

echo "<hr><h2>Gerar Json</h2>";

$json = json_encode($array,
    JSON_PRETTY_PRINT |
    JSON_UNESCAPED_UNICODE |
    JSON_UNESCAPED_SLASHES |
    JSON_HEX_TAG |
    JSON_HEX_APOS |
    JSON_HEX_AMP |
    JSON_HEX_QUOT |
    JSON_FORCE_OBJECT |
    JSON_NUMERIC_CHECK | JSON_PRESERVE_ZERO_FRACTION);

echo"<pre>";
print_r($json);
echo "</pre>";

echo "<hr><h2>CONSUMIR JSON</h2>";

$decode = json_decode($json, true);

echo "<pre>";
print_r($decode);
echo "</pre>";

echo "<hr><h2>last error</h2>";



$jsonErrors = [
    JSON_ERROR_NONE => 'Nenhum erro',

    JSON_ERROR_DEPTH => 'O limite da pilha de camadas foi ultrapassado',

    JSON_ERROR_STATE_MISMATCH => 'Ocorre em underflows ou com incongruência de modos',

    JSON_ERROR_CTRL_CHAR => 'Erro em caracter de controle, possivelmente erro de enconding',

    JSON_ERROR_SYNTAX => 'Erro de sintaxe',

    JSON_ERROR_UTF8 => 'Caracteres UTF-8 mal formados, possivelmente erro de enconding',

    JSON_ERROR_RECURSION => 'O objeto ou array passado para json_encode() inclui referências recursivas, e não pôde ser formatada',

    JSON_ERROR_INF_OR_NAN => 'Um valor passado para json_encode() inclui NAN ou INF',

    JSON_ERROR_UNSUPPORTED_TYPE => 'Um valor de um tipo não suportado foi informado para json_encode()'
];

$error = $jsonErrors[json_last_error()] ?? 'Erro desconhecido (' . json_last_error() .')';




$last_error = json_last_error();

echo"<pre>";
print_r($last_error);
echo "</pre>";








