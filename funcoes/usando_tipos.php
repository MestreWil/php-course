<div class="titulo">Usando tipos</div>

<?php

function somar1($a, $b){
    echo "<span>Somando $a + $b = </span>";
    return $a + $b;
}

echo somar1( 1, 2) . "<br>";
echo somar1(1.7, 2.5) . "<br>";
// o php vai pegar so o numero inicial da string e somar como numero (muito loko)
echo somar1(4 , "4dois") . "<br>";

function somar2(int $a, int $b){
    echo "<span>Somando $a + $b = </span>";
    return $a + $b;
}

echo somar2( 1, 2) . "<br>";

// note que na funcao somar2 eu defini os parametros como sendo inteiro, ou seja
// quando o a funcao fizer a soma, a funcao vai pegar o primeiro numero antes da virgula e 
// fazer a soma
echo somar2(1.7, 2.5) . "<br>";
// o php vai pegar so o numero inicial da string e somar como numero (muito loko)
echo somar2(4 , "4dois") . "<br>";

// defino que o tipo de retorno vai ser inteiro
function somar3($a, float $b): int {
    echo "<span>Somando $a + $b = </span>";
    return $a + $b;
}
echo somar3( 1, 2) . "<br>";
echo somar3(1.7, 2.5) . "<br>";
echo somar3(4 , "4dois") . "<br>";