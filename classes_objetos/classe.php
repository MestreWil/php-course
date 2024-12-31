<div class="titulo">Primeira Classe</div>

<?php

class Cliente {
    // atributos
    public $nome = 'Anônimo';
    public $idade = 18;

    //metodos
    public function apresentar(){
        echo "Nome: {$this->nome} | Idade: {$this->idade}<br>";
    }

}

$c1 = new Cliente();


$c1->nome = "MestreWill";
$c1->idade = 27;


$c2 = new Cliente();
$c2->nome = "Aline";
$c2->idade = 22;
$c1->apresentar();
$c2->apresentar();