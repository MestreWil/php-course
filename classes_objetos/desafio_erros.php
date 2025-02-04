<div class="titulo">Desafio dos 7 erros</div>

<?php

// Codigo mal feito que nao roda
// interface Template
// {
//     function metodo1();

//     public function metodo2($parametro);
// }

// abstract class ClasseAbstrata extends Template
// {
    
//     public function metodo3()
//     {
//         echo "Estou funcionando";
//     }
// }

// class Classe implements ClasseAbstrata 
// {
//     function __construct($parametro)
//     {
        
//     }
// }

// $exemplo = Classe();
// $exemplo.metodo3();


// Codigo certo 
interface Template
{
    function metodo1();

    public function metodo2($parametro);
}

abstract class ClasseAbstrata implements Template
{
    public function metodo1()
    {

    }
    
    public function metodo3()
    {
        echo "Estou funcionando";
    }
}

class Classe extends ClasseAbstrata 
{
    function __construct($parametro)
    {
        
    }

    

    public function metodo2($parametro)
    {

    }
}

$exemplo = new Classe('...');
$exemplo->metodo3();