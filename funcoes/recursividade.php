<div class="titulo">Recursividade</div>

<?php

/*
function fatorial($numero){
    return $numero * fatorial($numero - 1);
}

echo fatorial(5);

*/


/*
    Solução do curso 

    function somaUmAte($numero){
        $soma = 0;

        for(; $numero >= 1; $numero--){
            $soma += $numero;
        }
        return $soma;
    }
*/
function somarUmAte($numero){
    $soma = 0;
    for($i = $numero; $i >=0; $i-- ){
        $soma += $i;
    }
    return $soma;
}

echo somarUmAte(5) , "<br>";

function somaRecursivaUmAte($numero) {
     if($numero == 1) {
        return 1;
     } 
     return $numero + somaRecursivaUmAte($numero - 1);
}

echo somaRecursivaUmAte(5) , "<br>";

function somaRecursivaEconomica($numero){
    return $numero === 1 ? 1 : $numero + somaRecursivaEconomica($numero - 1);
}

echo somaRecursivaEconomica(5), "<br>";

function fatorial($numero){
    return $numero === 1 ? 1 : $numero * fatorial($numero - 1);
}

echo fatorial(7), "<br>";