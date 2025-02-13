<div class="titulo">Metodos Mágicos</div>

<?php

class Pessoa
{
    public $nome;
    public $idade;

    function __construct($nome, $idade)
    {
        echo 'Construtor Invocado<br>';
        $this->nome = $nome;
        $this->idade = $idade;
    }

    function __destruct()
    {
        echo 'E morreu';
    }

    public function __toString()
    {
        return "Nome: {$this->nome} | Idade: {$this->idade}";
    }

    public function apresentar()
    {
        echo $this . "<br>";
    }

    public function __get($name)
    {
        echo "Lendo atributo não declarado: {$name}", "<br>";
    }

    public function __set($name, $value)
    {
        echo "Alterando atributo não declarado: {$name}/{$value}", "<br>";
    }

    public function __call($name, $arguments)
    {
        echo "Tentando executar o metodo: {$name}", "<br>";
        echo ", com os parametros";
        print_r($arguments);
    }
}

$pessoa = new Pessoa('William', 26);
$pessoa->apresentar();
echo $pessoa, "<br>";
$pessoa->nome = 'Hamilton';
$pessoa->apresentar();
$pessoa->nomeCompleto = "Muito foda";

$pessoa->exec(1, "2", []);