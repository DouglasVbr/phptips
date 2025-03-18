<?php


// exercicio dos 5 patinhos
$patinhos = readline('Digite a quantidade de patinhos: ');


if (!is_numeric($patinhos) || $patinhos <= 1 || $patinhos >= 10) {
    echo " O número de patinhos digitado é invalido! ";
    echo "é necessário enviar um valor maior que 1 e menor que 10.\n";
    exit;


}

for ($i = $patinhos; $i > 0; $i--) {
    echo "\n";

    echo $i != 1 ?
        $i . " patinhos foram passear\n" :
        "1 patinho foi passear\n";

    echo "Além das montanhas para brincar\n";
    echo "A mamãe gritou: Quá, quá, quá, quá\n";

    switch ($i) {

        case 2:
            "Más só 1 patinho voltou de lá. \n";
            break;

        case 1:
            "Mas nenhum Patinho voltou de lá \n";
            break;
        default:
            echo "Mas só\n" . ($i - 1), "\npatinhos voltaram de lá\n";
            break;
    }
}
echo "\n";
echo "A mamãe patinha foi procurar\n";
echo "Além das montanhas, na beira do mar\n";
echo "A mamãe gritou: Quá, quá, quá, quá!\n";
echo "E os  .$patinhos voltaram de lá\n";


// exercicio  conversor de unidade

// unidades válidas para o sistema
$unidades =
    ['mm' => 1, 'cm' => 10, 'm' => 1000, 'km' => 1000000];


// textos das unidades validas
$unidadesValidas = implode(', ', array_keys($unidades));


do {
    // solicita a unidade base para o usuario
    $unidadeBase = readline('Digite a unidade Base: (' . $unidadesValidas . '): ');

    // mensagem de erro de unidade
    if (!isset($unidades[$unidadeBase])) {
        echo "Unidade invalida!\n\n";
    }

} while (!isset($unidades[$unidadeBase]));

do {
    // solicita o valor da unidade base para o usuario
    $valorBase = readline('Digite o Valor Base:');

    // mensagem de erro do valor
    if (!is_numeric($valorBase)) {
        echo "Valor invalido!\n\n";
    }

} while (!is_numeric($valorBase));

// valor em milimetros
$valorMilimetros = $valorBase * $unidades[$unidadeBase];
echo "\nresultados:\n";

// imprime as unidades do sistema
foreach ($unidades as $unidade => $divisor) {


    //imprime o valor correspondente na unidade
    echo " > " . ($valorMilimetros / $divisor) . " " . $unidade, "\n";


    // ignora a impressão da unidade base
    if ($unidade == $unidadeBase) continue;

}


// exercicio sorteio de nomes

//Array para guardar a  lista de nomes
$nomes = [];


do {
    echo "Menu de opções:\n";
    echo "1 - Adicionar\n";

    if (count($nomes) >= 1) echo "2 - Listar\n";

    if (count($nomes) >= 2) echo "3 - Sortear\n";


    echo "4 - Sair\n";

    // opção selecionada pelo usuario
    $opcao = readline('Digite a opção desejada: ');


    echo "\n\n";
    //  validações das opções
    switch ($opcao) {
        //Adicionar
        case 1:
            $nomes [] = readline('Digite um novo nome: ');
            echo "\n\n";
            break;


        //Listar
        case 2:
            if (count($nomes) >= 1) {
                echo "Nomes nas Lista\n";
                foreach ($nomes as $nome) {
                    echo " - " . $nome, "\n";
                }
                echo "\n\n";
            }

            break;

        //Sortear

        case 3:
            if (count($nomes) >= 2) //
            {
                // sorteio da posição do array
                $indice = array_rand($nomes);

                // nome sorteado
                echo "O sorteado foi: " . $nomes[$indice], "\n";
                echo "\n\n";


                // remove os nomes ja sorteados
                unset($nomes[$indice]);
            }

            break;

    }


} while ($opcao != 4);


// exercicio saque

// cedulas disponiveis
$cedulas = [5, 10, 20, 50, 100];


// Informa as cedulas Disponiveis para saque
echo "Cedulas disponiveis:  \n" . implode(', ', $cedulas), "\n";

//Solicita o valor do saque
$ValorSaque = readline('Digite o valor do saque: ');


// Verifica o Valor do saque
if ($ValorSaque % $cedulas[0] > 0) {
    die("O valor solicitado não pode ser atendido pelas cedulas disponiveis.");

}

//auxiliar do calculo do valor restante
$valorRestante = $ValorSaque;


//cedulas para saque
$cedulasSaque = [];


//prioriza a  Cedulas maior
rsort($cedulas);

// Intera a cedulas disponiveis
foreach ($cedulas as $cedula) {
    echo $cedula . "\n ";

    // verifica o valor da cedula
    if ($cedula > $valorRestante) {
        continue;


        // quantidade da cedula atual o floor arredonda o numero
        $quantidade = floor($valorRestante / $cedula);


        // calcula o valor restante apos utilizar a cedula
        $valorRestante -= $valorRestante - ($cedula * $quantidade);


        // Cedulas para o saque
        $cedulasSaque[$cedula] = $quantidade;

        echo $cedula . " - " . $quantidade, "\n";

        exit;


    }

    //valor do saque
    echo "\n Saque de R$" . $ValorSaque . "\n";

    // cedulas retornadas
    foreach ($cedulasSaque as $cedula => $quantidade) {

        echo ">" . $quantidade . " x R$ " . $cedula . "\n ";

        echo "\n";

    }


}


//  exercicio criar senha


// Tamanho da senha
$tamanho = (int)readline('Digite o tamanho da senha  entre ( 6 até 60 caracteres) ');


// verifica o tamanho da senha
if (!is_numeric($tamanho) || $tamanho < 6 || $tamanho > 60) {
    echo "\n\n O tamanho da senha deve ser um numero entre 6 e 60 caracteres \n\n";
    die('tamanho invalido');
}

// caracteres da senha
$caracteres = [];

// se o usuario quer letras maiusculas
if (readline('Deseja incluir letras maiusculas? (s/n) ') == 's') {
    $caracteres = array_merge($caracteres, range('A', 'Z'));
}


// se o usuario quer letras minusculas
if (readline('Deseja incluir letras maiusculas? (s/n) ') == 's') {
    $caracteres = array_merge($caracteres, range('a', 'z'));
}

// se o usuario quer caracteres numericos
if (readline('Deseja incluir caracteres numericos? (s/n) ') == 's') {
    $caracteres = array_merge($caracteres, range('0', '9'));
}

// se o usuario quer caracteres especiais
if (readline('Deseja incluir caracteres especiais? (s/n) ') == 's') {
    $caracteres = array_merge($caracteres, ['!', '@', '#', '$', '%', '^', '&', '*']);
}

// impede  a senha caso nenhum tipo de caracteres for definido
if (empty($caracteres)) {

    die("Nenhum tipo de caracteres foi definido. \n\n");

}

// ajusta a quantidade de caracteres
while (count($caracteres) < $tamanho) {
    $caracteres = array_merge($caracteres, $caracteres);
}


// bagunça os caracteres
shuffle($caracteres);


//nova senha
$senha = implode(array_slice($caracteres, 0, $tamanho));

// imprime a senha
echo "\n\n Nova senha: " . $senha . "\n\n";


// exercicio calculadora

// recebe a expressão matematica
$expressao = readline('Digite a expressao matemática: ');


// verifica a expressão enviada
if (preg_match('/[^0-9\ \+\-\\/\*\(\)]/', $expressao)) {

    die("A expressão é invalida \n\n");
}

// calcula o resultado da expressão
$resultado = eval('return ' . $expressao . ';');


// verifica os resultados numéricos
if (!is_numeric($resultado)) {
    die("A expressão não pode ser calculada. Verifique os dados enviados . \n\n");
}


// imprime o resultado da expressão
echo "\n\n Resultado: " . $resultado . "\n\n";


//  Escreva um script que pede o raio de um círculo, e em seguida exiba o perímetro e área do círculo.
//     Para saber o valor do pi, use: M_PI (ele armazena o valor de pi)
$raio = readline("\n Digite o raio do Circulo: \n");
echo "\n Area:\n " . M_PI * pow($raio, 2);
echo "\n Perimetro: \n " . 2 * M_PI * $raio;
echo "\n";


//Faça um script que peça um número e então mostre a mensagem O número informado foi [número].
$numero = readline("\n Digite um numero: \n");
echo "\n O numero informado foi: " . $numero . "\n";


// Faça um script que peça dois números e imprima a soma.

$numero1 = readline("\n Digite um numero: \n");
$numero2 = readline("\n Digite outro numero: \n");
$soma = $numero1 + $numero2;
echo " \n a Soma é : \n " . $soma;


//Faça um script que peça 3 notas de um aluno e mostra sua média.
$nota1 = readline("\n Digite a primeira nota: \n");
$nota2 = readline("\n Digite a segunda nota: \n");
$nota3 = readline("\n Digite a terceira nota: \n");

$media = ($nota1 + $nota2 + $nota3) / 3;

echo " a sua média é : \n " . $media;

//Faça um script que converta metros para centímetros.
$metros = readline("\n Digite o valor em metros: \n");
$centimetros = $metros * 100;
echo " os metros em centimetros são : \n " . $centimetros;

//Faça um script que calcule a área de um quadrado, em seguida mostre o dobro desta área para o usuário.

$lado = readline("\n Digite o valor do lado do quadrado: \n");
$area = pow($lado, 2);
$dobroArea = $area * 2;

echo "o dobro da area do quadrado é : \n " . $dobroArea;


//Faça um script que pergunte quanto você ganha por hora e o número de horas trabalhadas no mês.
// Calcule e mostre o total do seu salário no referido mês.

$perguntaGanho = readline("\n Digite o valor do ganho por hora: \n");
$numDHorasPMes = readline("\n Digite o Numero de Horas trabalhadas no mes: \n");

$salario = $perguntaGanho * $numDHorasPMes;

echo " seu salario no mes é de : \n " . $salario;



// Faça um script que peça a temperatura em graus Farenheit, transforme e mostre a temperatura em graus Celsius.
//C = (5 * (F-32) / 9).
$temperatura = readline("\n Digite a temperatura em graus Farenheit: \n");
$temperaturaCelsius = ($temperatura - 32) * 5 / 9;

echo "A temperatura em Celsius é: \n " . $temperaturaCelsius;

// Faça um script que peça a temperatura em graus Celsius, transforme e mostre em graus Farenheit.
$temperaturaCelsius = readline("\n Digite a temperatura em graus Celsius: \n");
$temperaturaFarenheit = ($temperaturaCelsius * 9 / 5) + 32;

echo "a temperatura em Farenheit é de: \n " . $temperaturaFarenheit;

//Faça um script que peça 2 números inteiros e um número real. Calcule e mostre:
//o produto do dobro do primeiro com metade do segundo .
//a soma do triplo do primeiro com o terceiro.
//o terceiro elevado ao cubo.

$numero1 = readline("\n Digite o primeiro numero: \n");
$numero2 = readline("\n Digite o segundo numero: \n");
$numero3 = readline("\n Digite o terceiro numero: \n");

$produto = $numero1 * 2 * $numero2 / 2;
$soma = $numero1 * 3 + $numero3;
$cubo = pow($numero3, 3);

echo " resposta 1: \n " . $produto;
echo " resposta 2: \n " . $soma;
echo " resposta 3: \n " . $cubo;

//Tendo como dados de entrada a altura de uma pessoa,
// construa um script que calcule seu peso ideal, usando a seguinte fórmula: (72.7*altura) - 58
$altura = readline("\n Digite a altura: \n");
$pesoIdeal = (72.7 * $altura) - 58;

echo " seu peso ídeal é de: \n " . $pesoIdeal;


//Tendo como dado de entrada a altura (h) de uma pessoa,
// construa um script que calcule seu peso ideal, utilizando as seguintes fórmulas:
//Para homens: (72.7*h) - 58
//Para mulheres: (62.1*h) - 44.7
$altura2 = readline("\n Digite a altura: \n");
$pesoh = (72.7 * $altura2) - 58;
$pesom = (62.1 * $altura2) - 44.7;
echo "\n\nseu peso é de: \n " . $pesoh . " para homens\n\n";
echo"seu peso é de: \n " . $pesom . " para mulheres\n\n";



//João Papo-de-Pescador, homem de bem,
// comprou um microcomputador para controlar
// o rendimento diário de seu trabalho.
// Toda vez que ele traz um peso de peixes
// maior que o estabelecido pelo regulamento
// de pesca do estado de São Paulo (50 quilos)
// deve pagar uma multa de R$ 4,00 por quilo excedente.
// João precisa que você faça um script que leia a variável
// peso (peso de peixes) e calcule o excesso. Gravar na variável
// excesso a quantidade de quilos além do limite e na variável multa
// o valor da multa que João deverá pagar. Imprima os dados do script
// com as mensagens adequadas.



























