<div class="titulo">While/Do While</div>

<?php

// A diferenca é que o while poder ser que seja infinito ou não execute nada dependendo da condição
// ja o do while a instrução é feita pelo menos uma vez

const VALOR_LIMITE = 5;

$contador = 0;

while($contador < VALOR_LIMITE){
    echo "WHILE $contador <br>";
    $contador++;
}

echo "<hr>";

$contador = 100;
do {
    echo "DO WHILE $contador <br>";
    $contador++;
} while($contador < VALOR_LIMITE);

$contador = 0;
while(true){
    echo "while(true) $contador <br>";
    $contador++;
    if($contador >= VALOR_LIMITE) break;
}