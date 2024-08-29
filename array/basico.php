<div class="titulo">Array</div>

<?php

$lista = array(1, 2, 3.4, "texto");

echo $lista . "<br>";
var_dump($lista);
echo "<br>";
echo "<br>";
echo "<br>";
print_r($lista);

// no php um elemtento de umma string com acento é considerado 2
// o metodo mb_substr(*string, *indice, quantos)

$var= "Tu é muito foda";
echo $var[6];
echo mb_substr($var, 6, 1);
