<div class="titulo">Operador Ternário</div>

<?php

$idade = 70;
$status;

$status = $idade >= 18 ? 'Maior de idade':'Menor de idade';
// variavel = condicional se? (true) 'Maior de idade':senao'Menor de idade' 
echo "$status<br>";