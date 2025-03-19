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
echo "seu peso é de: \n " . $pesom . " para mulheres\n\n";


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


// pede para o usuario digitar o peso do peixe
$peso = readline("\n Digite o peso do peixe: \n");

const LIMITE_peso = 50; // declaração de variavel (Constante)
const Valor_multa_Por_excesso = 4; // declaração de variavel (Constante)

function obterPesoExcesso(): float
{ // função para obter o  peso

    do {
        $pesoExcesso = readline("\n Digite o peso do peixe (em kg: \n");
        if (!is_numeric($pesoExcesso) || $pesoExcesso < 0) {
            echo("\n\n Peso invalido! Digite um valor numérico maior ou igual a zero \n\n");
            $pesoExcesso = null;
        }
    } while ($pesoExcesso === null);
    return (float)$pesoExcesso;
}

$peso = obterPesoExcesso();// chama a função obter peso em excesso

$excesso = max(0, $peso - LIMITE_peso); // limita o valor do peso

$multa = $excesso * Valor_multa_Por_excesso; // calculo da multa caso passe do peso


// exibe o resultado se o excesso for maior que 0 paga a multa
if ($excesso > 0) {
    echo "o peso do peixe foi de {$peso} quilos, e o excesso foi de {$excesso} quilos. \n}";
    echo "voces devem pagar uma multa de R$ {$multa} \n";
} else { // se não, o peixe está ok não precisa pagar multa
    echo "o peso do peixe foi de {$peso} quilos. não há excesso, portanto nenhuma multa será cobrada. \n";
}


// Faça um script que pergunte quanto você ganha por hora e o número de horas trabalhadas no mês.
// Calcule e mostre o total do seu salário no referido mês,
// sabendo-se que são descontados 11% para o Imposto de Renda, 8% para o INSS
// e 5% para o sindicato, faça um script que nos dê:
//salário bruto.
//quanto pagou ao INSS.
//quanto pagou ao sindicato.
//o salário líquido.
//calcule os descontos e o salário líquido, conforme a tabela abaixo:
//+ Salário Bruto : R$
//- IR (11%) : R$
//- INSS (8%) : R$
//- Sindicato ( 5%) : R$
//= Salário Liquido : R$
//Obs.: Salário Bruto - Descontos = Salário Líquido.

$perguntaGanho = readline("\n Digite o valor do ganho por hora: \n");
$numDHorasPMes = readline("\n Digite o Numero de Horas trabalhadas no mes: \n");


$salario = $perguntaGanho * $numDHorasPMes;

$IR = $salario * 11 / 100;
$INSS = $salario * 8 / 100;
$Sindicato = $salario * 5 / 100;

$salarioLiquido = $salario - $IR - $INSS - $Sindicato;

if ($salario === $IR || $salario === $INSS || $salario === $Sindicato) {
    echo "seu salario liquido é de : \n " . $salarioLiquido;
} else {
    echo " seu salario não está descontado nenhum desconto ";
}

if ($salarioLiquido === $IR || $salarioLiquido === $INSS || $salarioLiquido === $Sindicato) {
    echo "seu salario liquido é de : \n " . $salario;
} else {
    echo " seu salario liquido é diferente do salario bruto  ";
}


echo "  seu salario bruto é de : \n " . $salario . "voce pagou de:\n " . $IR . " para o IR\n " . $INSS . " para o INSS\n " . $Sindicato . " para o Sindicato\n";
echo "seu salario liquido é de : \n " . $salarioLiquido;


// Faça um script para uma loja de tintas.
// O script deverá pedir o tamanho em metros
// quadrados da área a ser pintada. Considere
// que a cobertura da tinta é de 1 litro para
// cada 3 metros quadrados e que a tinta é vendida
// em latas de 18 litros, que custam R$ 80,00.
// Informe ao usuário a quantidades de latas de
// tinta a serem compradas e o preço total.

$area = readline("\n Digite o tamanho da area a ser pintada: \n");

$latas = ceil($area / 3);

$preco = $latas * 80;

echo " voce precisa de " . $latas . " latas de tinta para pintar a area de " . $area . " metros quadrados. \n\n";

echo "o preço total de latas é de : \n " . $preco;


// Faça um script para uma loja de tintas. O script deverá pedir
// o tamanho em metros quadrados da área a ser pintada.
// Considere que a cobertura da tinta é de 1 litro para cada
// 6 metros quadrados e que a tinta é vendida em latas de 18
// litros, que custam R$ 80,00 ou em galões de 3,6 litros, que
// custam R$ 25,00.
//Informe ao usuário as quantidades de tinta a serem
// compradas e os respectivos preços em 3 situações:
//comprar apenas latas de 18 litros;
//comprar apenas galões de 3,6 litros;
//misturar latas e galões, de forma que o preço seja o menor.
// Acrescente 10% de folga e sempre arredonde os valores para cima,
// isto é, considere latas cheias.

// tem  que rever esse exercicio

$area = readline("\n Digite o tamanho da area a ser pintada: \n");

$CoberturaPorLitros = ceil($area / 6);
$latas18 = ceil($area / 18);
$galoes = ceil($area / 3.6);

$preco18 = $latas18 * 80;
$preco36 = $galoes * 25;

$preco = min($preco18, $preco36);

$preco = $preco + ($preco * 10 / 100);

echo " a quantidade de tintas e serem compradas é de : \n " . $CoberturaPorLitros . " litros de tinta \n";
if ($latas > 18 and $galoes === 3.6 || $latas === 18 && $galoes > 3.6) {
    echo " voce precisa de " . $latas18 . " latas de tinta para pintar a area de " . $area . " metros quadrados. \n\n";
}

//Faça um script que peça o tamanho de um arquivo para download (em MB)
// e a velocidade de um link de Internet (em Mbps),
// calcule e informe o tempo aproximado de download
// do arquivo usando este link (em minutos).

$tamanho = readline("\n Digite o tamanho do arquivo em MB: \n");
$velocidade = readline("\n Digite a velocidade do link em Mbps: \n");

$tempo = ceil($tamanho / $velocidade);

if ($tempo > 60) {

    echo "o  download do arquivo demorara mais de 1 hora \n";

} else {
    echo "o download do arquivo demorara " . $tempo . " minutos \n";
}

// 1 – Escreva um algoritmo para somar dois números e multiplicar o resultado pelo primeiro número.
$numero1 = readline("\n Digite o primeiro numero: \n");
$numero2 = readline("\n Digite o segundo numero: \n");

$soma = $numero1 + $numero2;
$multiplicacao = $soma * $numero1;

echo "a soma de .......... " . $soma . " e o multiplicacao de .......... " . $multiplicacao . " \n";


// 2 – Escreva um algoritmo que leia três números nas variáveis Val1,
// Val2 e Val3, calcule sua média na variável media e exiba para o usuário o resultado

$val1 = readline("\n Digite o primeiro numero: \n");
$val2 = readline("\n Digite o segundo numero: \n");
$val3 = readline("\n Digite o terceiro numero: \n");

$media = ($val1 + $val2 + $val3) / 3;

echo "a media de .......... " . $media . " \n";

// 3 – Escreva um algoritmo que receba um valor, calcule e mostre para usuário 15% deste valor.

$valor = readline("\n Digite o valor: \n");

$valor15 = $valor * 15 / 100;

echo "o valor .......... " . $valor . " com 15% de desconto equivale a .......... " . $valor15 . " \n";

// 4 – Escreva um algoritmo que receba um valor, calcule e mostre para o usuário 5% e 50% deste valor
$valorx = readline("\n Digite o valor: \n");
$calculo = $valorx * 5 / 100;
$calculo2 = $valorx * 50 / 100;

echo "o valor .......... " . $valorx . " com 5% de desconto equivale a .......... " . $calculo . " \n";
echo "o valor .......... " . $valorx . " com 50% de desconto equivale a .......... " . $calculo2 . " \n";

// 5 – Escreva um algoritmo que leia dois números, calcule o quadrado de cada um, some os quadrados e mostre o resultado.
$num1 = readline("\n Digite o primeiro numero: \n");
$num2 = readline("\n Digite o segundo numero: \n");

$quadrado1 = pow($num1, 2);
$quadrado2 = pow($num2, 2);

$soma = $quadrado1 + $quadrado2;

echo "o quadrado de .......... " . $num1 . " e o quadrado de .......... " . $num2 . " e somado equivale a .......... " . $soma . " \n";


// 6 – Escreva um algoritmo que leia a velocidade de um objeto
// em m/s (metros por segundo), calcule e exiba para o usuário a velocidade em km/h.
$velocidade = readline("\n Digite a velocidade do objeto em m/s: \n");

$velocidadeKm = $velocidade * 3.6;

echo "a velocidade em km/h de .......... " . $velocidade . " equivale a .......... " . $velocidadeKm . " \n";

// 7 – Escreva um algoritmo que leia a altura e
// o peso de uma pessoa, calcule o seu IMC
// (Índice de Massa Corporal) e exiba para o usuário.
$pedirAltura = readline("\n Digite a altura: \n");
$pedirPeso = readline("\n Digite o peso: \n");

$imc = $pedirPeso / pow($pedirAltura, 2);

echo " o IMC de .......... " . $pedirPeso . " e .......... " . $pedirAltura . " equivale a .......... " . $imc . " \n";

// 8 – Escreva um algoritmo que receba um valor, calcule e mostre um desconto de 9%
$receberValor = readline("\n Digite o valor: \n");

$desconto = $receberValor * 9 / 100;

echo "o valor .......... " . $receberValor . " com 9% de desconto equivale a .......... " . $desconto . " \n";


// 9 – Escreva um algoritmo que receba o valor
// de um produto e calcule um desconto de 7%,
// exibindo para o usuário o valor original,
// o valor do desconto e o valor com o desconto.
$receberValorProduto = readline("\n Digite o valor do Produto: \n");

$desconto = $receberValorProduto * 7 / 100;

echo "o valor original do produto .......... " . $receberValorProduto . " \n";
echo "o valor do desconto .......... " . $desconto . " \n";
echo "o valor .......... " . $receberValorProduto . " com 7% de desconto equivale a .......... " . $desconto . " \n";

// 10 – Escreva um algoritmo que calcule e apresente o volume
// de uma caixa retangular por meio da seguinte fórmula:
// volume = comprimento x largura x altura
$comprimento = readline("\n Digite o comprimento: \n");
$largura = readline("\n Digite a largura: \n");
$altura = readline("\n Digite a altura: \n");

$volume = $comprimento * $largura * $altura;

echo "o volume de uma caixa retangular de .......... " . $comprimento . " x .......... " . $largura . " x .......... " . $altura . " equivale a .......... " . $volume . " \n";

// 11  Escreva um algoritmo que receba um valor, calcule e mostre um desconto de 27%.
$receberValor2 = readline("\n Digite o valor: \n");
$desconto2 = $receberValor2 * 27 / 100;
echo "o valor .......... " . $receberValor2 . " com 27% de desconto equivale a .......... " . $desconto2 . " \n";

// 12 – Escreva um algoritmo que receba dois valores, calcule e apresente a área de um trapézio.
$receberValor3 = readline("\n Digite o valor: \n");
$receberValor4 = readline("\n Digite o valor: \n");

$area = ($receberValor3 + $receberValor4) * 2;
echo " a area do trapézio de .......... " . $receberValor3 . " e .......... " . $receberValor4 . " equivale a .......... " . $area . " \n";


// 13 – Escreva um algoritmo que leia 3 notas de um aluno
// e calcule a média final deste aluno, considerando que
// a média é ponderada, ou seja, o peso das notas são, respectivamente, 2, 3 e 5.
$nota1 = readline("\n Digite a nota 1: \n");
$nota2 = readline("\n Digite a nota 2: \n");
$nota3 = readline("\n Digite a nota 3: \n");

$mediaPonderada = ($nota1 * 2 + $nota2 * 3 + $nota3 * 5) / 10;

echo "a media ponderada do aluno .......... " . $mediaPonderada . " \n";

//14 – Escreva um algoritmo que receba o valor de um produto,
// acrescente 16% a esse valor, divida em 10 parcelas
// e mostre para o usuário o valor da parcela e o valor total da compra.

$receberValorProduto14 = readline("\n Digite o valor do Produto: \n");

$parcela = $receberValorProduto14 * 16 / 100;

echo "o valor da parcela .......... " . $parcela . " \n";

echo "o valor total da compra .......... " . $receberValorProduto14 . " \n";

// 15 – Escreva um algoritmo que receba de entrada a distância total (em km)
// percorrida por um automóvel e a quantidade de combustível (em litros)
// consumida para percorrê-la, calcule e imprima o consumo médio de combustível.
//  Fórmula: Consumo médio = Km / litros

$distancia = readline("\n Digite a distancia total em km: \n");
$combustivel = readline("\n Digite a quantidade de combustivel em litros: \n");

$consumo = $distancia / $combustivel;

echo " o cosumo medio de combustivel equivale a .......... " . $consumo . " \n";

// 1) - Crie um algoritmo que receba um número digitado pelo usuário
// e verifique se esse valor é positivo, negativo ou igual a zero.
// A saída deve ser: "Valor Positivo", "Valor Negativo" ou "Igual a Zero".
$numVersao = readline("\n Digite o numero: \n");

switch ($numVersao) {
    case $numVersao >= 0:
        echo " o numero e positivo \n";
        break;


    case  $numVersao <= 0:
        echo " o numero e negativo \n";
        break;

    case  $numVersao === 0:
        echo " o numero e igual a zero \n";

}

//2) Crie um algoritmo que solicite a entrada
// de um número, e exiba a tabuada de 0 a 10
// de acordo com o número solicitado, ex:
//Entrada = 4
//Saída = 4 X 0 = 0...4 X 10 = 40.

//$numTabuada = readline("\n Digite o numero: \n");

//for ($i = 0; $i <= 10; $i++);



//}

// 3) Crie um algoritmo que solicite um número,
// e faça o cálculo fatorial do mesmo,
// exiba o resultado na tela. Ex: Entrada = 3
// Processamento: (3 * 2) * 1 Saída: 6






