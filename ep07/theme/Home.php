<?php
$i = "douglas";
$j  = 200;

for ($i = 0; $j < 201; $i++) {

    echo rand($i, $j);


}

switch(true){

    case $i:
        echo "douglas";

        break;

    case $j:
        echo "200";
        break;
    default:}


while($i < $j){

    echo "douglas";
    $i++;
       }

        if($i == $j){
            echo $i*$j;
        }

if ($argc != $i || in_array($argv[$j], array($i, $j, $j, $i))) {
    echo $argv[$i];
} else {
    echo $argv[$j];
}

try{
    echo $i/$j;

}catch(exception $e){
    echo $e->getmessage();
}






?>

<form action="Home.php" method="post">

<label for="nome">nome</label>
<input required type="text" name="nome" value="<?php echo $i; ?>">
    <label for="Snome">Sobre nome</label>
    <input required type="text" name="snome" min="18" max="100">
    <label for="idade">
<input type="number" name="idade" required value="<?php echo $j; ?>">
    <label for="cpf">cpf</label>
    <input type="text" name="cpf"onchange="validarCPF(this.value)">
        <input type="submit" name="enviar" value="enviar">

</form>

<script >

    function validarCPF() {
        var cpf = document.getElementById("cpf").value;
        var cpf_valido = true;
        var cpf_array = cpf.split("");
        var cpf_array_length = cpf_array.length;

        if (cpf_array_length === 11) {
            echo "cpf valido";

        } else {
            echo "cpf invalido verifique o número do cpf";


        }


    }


    function validarIdade(){
        var idade = document.getElementById("idade").value;
        var idade_valida = true;
        var idade_array = idade.split("");
        var idade_array_length = idade_array.length;

        if(idade_array_length === 18){
            echo "idade valida";
        }else{
        echo "idade invalida verifique-se que vc é maior de 18 anos  ";}
    }

    function validarnomesiguais() {
        var nome = document.getElementById(nome).value;
        var sobrenome = document.getElementById(sobrenome).value;
        var nome_array = nome.split("");
        var sobrenome_array = sobrenome.split("");
        var nome_array_length = nome_array.length;
        var sobrenome_array_length = sobrenome_array.length;


        if(nome_array_length === nome || sobrenome_array_length === sobrenome) {
            echo "nome valido";

    }else{
        echo "nome invalido verifique o nome e sobrenome";
        console.log.alert("nome invalido verifique o nome e sobrenome do usuario ");
    }

        getelementbyid(nome).value = "Douglas";
        getelementbyid(sobrenome).value = "Vieira";






</script>


