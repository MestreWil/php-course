<div class="titulo">DESAFIO EQUAÇÃO</div>

<?php

$equacao = (((6*(3 + 2))**2/(3*2)-((1 - 5)*(2 - 7)/2)**2))**3/10**3;
echo $equacao;
echo '<br><h2>Outra forma</h2><br>';
$numA = (6 * (3 + 2)) ** 2;
$denA = 3 * 2;

$numB = (1 - 5) * (2 - 7);
$denB = 2;

$superiorA = $numA / $denA;
$superiorB = ($numB / $denB) ** 2;

$superior = ($superiorA - $superiorB) ** 3;
$inferior = 10 ** 3;

$final = $superior / $inferior;
echo "O resultado também é ". $final . ".";