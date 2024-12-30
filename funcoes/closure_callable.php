<div class="titulo">Closure & Callable</div>

<?php

$soma1 = function($a, $b){
    return $a + $b;
};

echo $soma1(2, 3) ;
echo (is_callable($soma1) ? 'Sim' : 'Não') . "<br>";


function soma2($a = null, $b = null){
    return $a + $b;
}

// Closure, classe que representa uma funcao anonima, o php interpreta uma funcao anonima como uma classe clossure
// Ja calleble é uma funcao passivel de ser chamada(invocada), na funcao anonima ela é callable, mas na funcao normal, 
// hoje ela não é callable
echo soma2(2, 3);

echo (is_callable('soma2') ? 'Sim' : 'Não') . "<br>";

var_dump($soma1);