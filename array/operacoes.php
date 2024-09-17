<div class="titulo">Operações com Arrays</div>

<?php

$dados1 = array(
    "Nome" => "William",
    "Idade" => 26,
);

$dados2 = [
    "naturalidade" => "Manaus"
];

$dadosCompletos = $dados1 + $dados2;
print_r($dadosCompletos);

echo '<br>' . is_array($dadosCompletos);
echo '<br>' . count($dadosCompletos);

echo '<br>';
$indice = array_rand($dadosCompletos);
echo "$indice = $dadosCompletos[$indice]";

//Para interpolar o array com o indice vc deve colocar em chaves
echo '<br>'; 
echo "{$dadosCompletos['Idade']}";
echo '<br>';
//Destroi o array
unset($dadosCompletos);
echo "<br>";
echo "{$dadosCompletos}";
