<div class="titulo">Construtor & Destrutor</div>

<?php

class Pessoa {
    public $nome;
    public $idade;

    function __construct($novoNome, $idade = 18){
        echo 'Construtor invocado! <br>';
        $this->nome = $novoNome;
        $this->idade = $idade;
    }

    function __destruct(){
        echo 'E morreu! <br>';
    }

    public function apresentar(){
        echo "{$this->nome}, {$this->idade} anos<br>";
    }
}

$pessoaA = new Pessoa("William Tavares", 40);

$pessoaA->apresentar();

unset($pessoaA); //Chama o metodo destrutor

$pessoaB = new Pessoa("Mariza", 15);

$pessoaB->apresentar();

$pessoaB = NULL; //Chama o metodo destrutor