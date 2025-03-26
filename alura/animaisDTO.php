<?php



class Animais
{
    private string $nome;         // Nome do animal
    private string $tamanho;      // Tamanho ou porte do animal (ex.: pequeno, médio, grande)
    private string $sexo;         // Sexo do animal (ex.: macho, fêmea)
    private string $especie;      // Espécie do animal (ex.: gato, cachorro, tigre)
    private int $idade;           // Idade do animal (em anos ou meses)
    private float $peso;          // Peso do animal
    private string $cor;          // Cor do animal
    private string $habilidade;   // Habilidade ou característica especial do animal (ex.: voar, nadar)
    private string $alimentacao;  // Tipo de alimentação (ex.: herbívoro, carnívoro, onívoro)
    private string $habitat;      // Habitat natural do animal (ex.: floresta, savana, deserto)

    public function __construct(
        string $nome,
        string $tamanho,
        string $sexo,
        string $especie,
        int $idade,
        float $peso,
        string $cor,
        string $habilidade,
        string $alimentacao,
        string $habitat
    ) {
        $this->nome = $nome;
        $this->tamanho = $tamanho;
        $this->sexo = $sexo;
        $this->especie = $especie;
        $this->idade = $idade;
        $this->peso = $peso;
        $this->cor = $cor;
        $this->habilidade = $habilidade;
        $this->alimentacao = $alimentacao;
        $this->habitat = $habitat;
    }

    // getters e setters

    public function __getnome(string $nome)
    {
        return $this->$nome;

    }
    public function __setnome(string $nome, $value){
    $this->$nome = $value;


    } public function __gettamanho(string $tamanho)
    {
        return $this->$tamanho;

    }
    public function __settamanho(string $tamanho, $value){
    $this->$tamanho = $value;

    } public function __getsexo(string $sexo)
    {
        return $this->$sexo;

    }
    public function __setsexo(string $sexo, $value){
    $this->$sexo = $value;

    } public function __getespecie(string $especie)
    {
        return $this->$especie;

    }
    public function __setespecie(string $especie, $value){
    $this->$especie = $value;

    } public function __getidade(int $idade)
    {
        return $this->$idade;

    }
    public function __setidade(int $idade, $value){
    $this->$idade = $value;

    } public function __getpeso(float $peso)
    {
        return $this->$peso;

    }
    public function __setpeso(float $peso, $value){
    $this->$peso = $value;

    } public function __getcor(string $cor)
    {
        return $this->$cor;

    }
    public function __setcor(string $cor, $value){
    $this->$cor = $value;

    } public function __gethabilidade(string $habilidade)
    {
        return $this->$habilidade;

    }
    public function __sethabilidade(string $habilidade, $value){
    $this->$habilidade = $value;

    } public function __getalimentacao(string $alimentacao)
    {
        return $this->$alimentacao;

    }
    public function __setalimentacao(string $alimentacao, $value){
    $this->$alimentacao = $value;

    }public function __gethabitat(string $habitat)
    {
        return $this->$habitat;

    }
    public function __sethabitat(string $habitat, $value){
    $this->$habitat = $value;

    }





}


