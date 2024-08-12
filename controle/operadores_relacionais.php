<div class="titulo">Operadores Relacionais</div>

<style type="text/css">
     p {
          margin-bottom: -10px;
     }
</style>

<?php
var_dump(1 == 1); //igual *true
var_dump(1 > 1); // maior *false
var_dump(1 >= 1); // maior igual *true
var_dump(4 < 23); // menor *true
var_dump(1 <= 17); // menor igual *true
var_dump(1 != 1); //diferente *false
var_dump(1 <> 1); // diferente *false

var_dump(1 == '1'); // com dois simbolos ele compara a equivalencia *true
var_dump(1 ==='1'); // com três simbolos de igual ele compara a equivalencia e o tipo das variaveis *false
var_dump( 1 != '1'); // ve a diferenca equivalente *false
var_dump(1 !== '1'); // ve a diferenca equivalente e dos tipos *true

echo "<p>Relacionamento no If/Else</p><hr>";

$idade = 25;
if ($idade < 18) {
     echo "menor de Idade = $idade anos<br>";
} else if ($idade <= 65) {
     echo "Adulto = $idade anos<br>";
} else {
     echo "Terceira idade! = $idade anos";
}

echo '<p>Spaceship</p><hr>';
var_dump(5 <=> 3); // saber se um numero é maior que outro *retorna 1 se o numero a esquerda for maior que o da direita
var_dump(50 <=> 50); // *retorna 0 se os numeros forem iguais
var_dump( 5 <=> 50);// *retorna -1 se o numero da direita for maior que o da esquerda

echo '<p>Valores podem ser V ou F</p><hr>';
var_dump(!!5); //utilizace a dupla negacao para verificar se um numero é verdadeiro ou nao
var_dump(!!0);
var_dump(!!'');
var_dump(!!" ");