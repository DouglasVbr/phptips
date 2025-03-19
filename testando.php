<?php



class testando
{

    public $nome;

    public $idade;
    public $sexo;
    public $peso;
    public $altura;
    public $nascimento;
    public $endereco;

    public function __construct( String $nome, int $idade, String $sexo, bool $peso, bool $altura, String $nascimento, String $endereco)
    {
        $this->nome = $nome;
        $this->idade = $idade;
        $this->sexo = $sexo;
        $this->peso = $peso;
        $this->altura = $altura;
        $this->nascimento = $nascimento;
        $this->endereco = $endereco;
    }


    /**
     * @return mixed
     */
    public function getNome()
    {
        return $this->nome;
    }
    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    /**
     * @return mixed
     */
    public function getIdade()
    {
        return $this->idade;
    }
    public function setIdade($idade)
    {
        $this->idade = $idade;
    }

    /**
     * @return mixed
     */
    public function getSexo()
    {
        return $this->sexo;
    }
    public function setSexo($sexo)
    {
        $this->sexo = $sexo;
    }

    /**
     * @return mixed
     */
    public function getPeso()
    {
        return $this->peso;
    }
    public function setPeso($peso)
    {
        $this->peso = $peso;
    }

    /**
     * @return mixed
     */
    public function getAltura()
    {
        return $this->altura;
    }
    public function setAltura($altura)
    {
        $this->altura = $altura;
    }

    /**
     * @return mixed
     */
    public function getEndereco()
    {
        return $this->endereco;
    }
    public function setEndereco($endereco)
    {
        $this->endereco = $endereco;
    }

    /**
     * @return mixed
     */
    public function getNascimento()
    {
        return $this->nascimento;
    }
    public function setNascimento($nascimento)
    {
        $this->nascimento = $nascimento;
    }

}