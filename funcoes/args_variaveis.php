<div class="titulo">Argumentos Variáveis</div>

<?php

function soma($a, $b){
    return $a + $b;
}

echo soma(14, 15) . "<br>";

echo soma(2, 3, 4, 5) . "<br>";

// os ... significa que o argumento, que é o parametro que a funcao vai receber 
// é variado, podendo ser mais de 2 argumento, transformando num array

function somaVerdadeira(...$numeros){
    $soma = 0;
    foreach($numeros as $num){
        $soma += $num; 
    }
    return $soma;
}

echo somaVerdadeira(1, 2, 3, 4,5);
// caso for passar um array como argumento, usar os ... para não deixalo um array dentro de um array(matriz)

$array = [6, 7, 8];
echo "<br>" . somaVerdadeira(...$array);

function membros($titular, ...$dependentes){
    echo "Titular: $titular <br>";
    if($dependentes){
        foreach($dependentes as $dep){
            echo "Dependente: $dep <br>";
        }
    }
}

echo "<br>";
membros("Ana Silva", "Pedro", "Rafaela", "Amanda");