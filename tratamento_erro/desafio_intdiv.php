<?php namespace Foda; ?>

<div class="titulo">Desafio intdiv</div>

<?php

 // Muda para subnamespace de Desafio
include('erro_desafio.php');
use Desafio\ErroPersonalizado;

function intdiv($a, $b)
{
    if($b == 0){
        throw new ErroPersonalizado("Não existe divisão por 0");
    }else{
        if(!is_int($a/$b)){
            throw new ErroPersonalizado("A divisão entre $a e $b não da um número inteiro.");
        }
    }
    return $a/$b;
}


// use Desafio\Foda\intdiv as minhafuc;

try {
    $divisaoPorZero = intdiv(8, 0);

    echo "A divisao entre $divisaoPorZero<br>";
    
} catch(ErroPersonalizado $e){
    echo "Motivo: {$e->getMessage()}<br>";
}
try {
    $divNaoInteiro = intdiv(8, 3);
    echo "A divisao entre $divNaoInteiro<br>";
    
} catch(ErroPersonalizado $e){
    echo "Motivo: {$e->getMessage()}<br>";
}
try {
    $divInteiro = intdiv(8, 2);
    echo "A divisao dá $divInteiro";
    
} catch(ErroPersonalizado $e){
    echo "Motivo: {$e->getMessage()}<br>";
}



    

   