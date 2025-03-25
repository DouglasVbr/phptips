<?php

// Crie um contador que comece em 1 e vá até 10 usando um loop while. Mostre cada número.
$contador = 1;
while ($contador <= 10) {
    echo $contador . "\n";
    $contador++;
}

// Crie um contador que começa em 10 e vá até 0 usando um loop while. Mostre cada número.
$contador = 10;
while ($contador >= 0) {
    echo $contador . "\n";
    $contador--;
}

// Crie um programa de contagem regressiva.
// Peça um número e conte deste número até 0, usando um loop while
$contagem = readline("\n Digite o numero: \n");
while ($contagem >= 0) {
    echo $contagem . "\n";
    $contagem--;
}
define ('DELAY_SECONDS', 1); // definindo delay de 2 segundos

// Crie um programa de contagem progressiva.
// Peça um número e conte de 0 até esse número,
// usando um loop while no console do navegador.
$contagem = readline("\n Digite o numero: \n");
while ($contagem <= 10) {
    echo $contagem . "\n";
    sleep(DELAY_SECONDS); // antes de ir pro proximo numero starta o delay de 2 segundos
    $contagem++;

}

// operador AND &&

$idade = 25;
$possui_Carteira = true;
$pergunta = readline("\n Digite a sua idade: \n");
// se idade é maior que 18 e possui carteira
if ($pergunta >= 18 && $possui_Carteira) {
    echo "pode Dirigir";
}else{
    echo "nao pode Dirigir\n\n";
}



$tem_maca = false;
$tem_banana = true;

$tem_fruta = readline("\n Digite se tem fruta: \n");
// se tem maça ou tem banana
if ($tem_fruta === "sim") {
    echo "\nvoce tem fruta \n";
}else{
    echo "\nvoce nao tem fruta\n";
}



// Jogo de adivinhar número aleatório até 100 com até 2 tentativas
$numero = rand(1, 100); // Gera o número secreto entre 1 e 100
$tentativa = 0; // Contador de tentativas
$numero_digitado = null;

while ($numero_digitado != $numero && $tentativa < 10) {
    $numero_digitado = (int) readline("\nDigite um número de 1 até 100: \n");

    // Valida se o número digitado está dentro do intervalo correto
    if ($numero_digitado < 1 || $numero_digitado > 100) {
        echo "Por favor, digite um número válido entre 1 e 100.\n";
        continue;
    }

    $tentativa++;

    if ($numero_digitado == $numero) {
        break; // Número correto, interrompe o loop
    } else {
        if ($numero_digitado > $numero) {
            echo "O número secreto é menor que $numero_digitado.\n";
        } else {
            echo "O número secreto é maior que $numero_digitado.\n";
        }
    }
}

if ($numero_digitado == $numero) {
    $palavra_tentativa = $tentativa > 1 ? "tentativas" : "tentativa";
    echo "Isso aí! Você descobriu o número secreto $numero com $tentativa $palavra_tentativa.\n";
} else {
    echo "Você excedeu o número de tentativas! O número secreto era $numero.\n";
}

// Crie um programa que utilize o cmd para exibir uma mensagem de boas-vindas
$nome = readline("\n Digite seu nome: \n");

echo "Bem vindo $nome \n";

// Crie uma variável chamada "nome" e atribua a ela o seu nome.
// Em seguida, utilize o console.log para exibir a mensagem "Olá,
// [seu nome]!" no console do navegador.

$nome = readline("\n Digite seu nome: \n");
echo "bem vindo $nome";


//Crie uma variável chamada "nome" e atribua a ela o seu nome.
// Em seguida, utilize o alert para exibir a mensagem "Olá, [seu nome]!" .

$nome = readline("\n Digite seu nome: \n");
echo "bem vindo $nome \n";

// Utilize o prompt e faça a seguinte pergunta:
// Qual a linguagem de programação que você mais gosta?.
// Em seguida, armazene a resposta em uma variável e mostre no console do navegador.

$linguagens = ["php", "javascript", "python", "java", "c#", "c++", "kotlyn", "ruby", "go.lang" ];
$linguagens_disponiveis = implode(', ', $linguagens);
do {
$pergunta = readline("Qual a Linguagem de Programação que voce mais  gosta? ($linguagens_disponiveis)\n");

if (!in_array(strtolower($pergunta), array_map('strtolower', $linguagens))) {
    echo"Por Favor, Escolha uma linguagem válida \n";


} while (!in_array(strtolower($pergunta), array_map('strtolower', $linguagens)));

echo "Voce escolheu $pergunta \n";
break;



}
while (true);



// Crie uma variável chamada "valor1" e outra chamada
// "valor2", atribuindo a elas valores numéricos de sua escolha.
// Em seguida, realize a soma desses dois valores e armazene o resultado
// em uma terceira variável chamada "resultado".
// Utilize o console.log para mostrar a mensagem
// "A soma de [valor1] e [valor2] é igual a [resultado]." no console.

$valor1 = readline("\n Digite o valor1: \n");
$valor2 = readline("\n Digite o valor2: \n");
$resultado = $valor1 + $valor2;

echo"A soma de $valor1 e $valor2 é igual a $resultado \n";




//Peça ao usuário para inserir sua idade com prompt.
// Com base na idade inserida, utilize um if
// para verificar se a pessoa é maior ou menor de idade,
// exibindo uma mensagem apropriada no console.

$idade = readline("\n Digite sua idade: \n");

if ($idade >= 18) {
    echo" maior de idade \n ";
}else{
    echo" menor de idade \n ";
}


// Crie uma variável "numero" e peça um valor com prompt verifique se é positivo,
// negativo ou zero. Use if-else para imprimir a respectiva mensagem.
$numero = readline("\n Digite um numero: \n");
if ($numero >= 0) {
    echo " o numero e positivo \n";
}
if ($numero <= 0) {
    echo " o numero e negativo \n";
}
if ($numero === 0) {
    echo " o numero e igual a zero \n";
}

echo"o numero e $numero \n";

//Use um loop while para imprimir os números de 1 a 10 no console.
$contador = 1;
while ($contador <= 10) {
    echo $contador . "\n";
    $contador++;
    sleep(DELAY_SECONDS);

}

// Crie uma variável "nota" e atribua um valor numérico a ela.
// Use if-else para determinar se a nota é maior ou igual a 7
// e exiba "Aprovado" ou "Reprovado" no console.

$nota = readline("\n Digite a nota: \n");
if ($nota >= 7) {
    echo "Aprovado \n";
}else{
    echo "Reprovado \n";
}

// Use o Math.random para gerar qualquer número aleatório e exiba esse número no console.

$digiteumnumero = rand(1, 100);
echo "o numero gerado e $digiteumnumero \n";


//Use o Math.random para gerar um número
// inteiro entre 1 e 10 e exiba esse número no console.

$numero = rand(1, 10);
echo "o numero gerado e $numero \n";

// Use o Math.random para gerar um número inteiro entre 1 e 1000 e exiba esse número no console.

$numero = rand(1, 1000);
echo "o numero gerado e $numero \n";



