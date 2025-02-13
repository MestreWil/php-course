<div class="titulo">Polimorfismo</div>

<?php

abstract class Comida
{
    public $peso;
}

class Arroz extends Comida
{

}

class Feijao extends Comida
{

}

class Sorvete extends Comida
{

}

class Pessoa
{
    public $peso;

    function __construct($peso)
    {
        $this->peso = $peso;
    }

    public function comer(Comida $comida)
    {
        $this->peso += $comida->peso;
    }
}
$arroz = new Arroz();
$arroz->peso = 1;
$p = new Pessoa(80);
echo $p->peso;
$p->comer($arroz);
echo $p->peso;