<div class="titulo">Variáveis</div>

<?php

$numeroA = 13;
echo $numeroA, '<br>';
var_dump($numeroA);

echo '<br>';
$a = 3;
$b = 16;
$soma = $a + $b;
echo $soma;
$soma = 0;

echo '<br>';
echo isset($soma);
echo '<br>';
unset($soma);
echo !isset($soma);
echo '<br>';
var_dump($soma);