<div class="titulo">Operadores Relacionais</div>

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

echo "<p>Relacioanaisno If/Else</p><hr>";

$idade = 25;
if ($idade < 18) {
     echo "menor de Idade = $idade anos<br>";
} else if ($idade <= 65) {
     echo "Adulto = $idade anos<br>"
} else {
     echo "Terceira idade! = $idade anos";
}