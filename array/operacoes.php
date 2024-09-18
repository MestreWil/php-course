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

$dadosCompletos["endereco"] = "Rua C, Quadra 5, N39";

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

$impares = [1, 3, 5, 7, 9];
$pares = [0, 2, 4, 6, 8];

$decimais = $pares + $impares;
echo "<br>";
print_r($decimais);
// junta os arrays de forma segura
$novo_decimais = array_merge($pares, $impares);
echo "<br>";
print_r($novo_decimais);

echo "<br>";
// a funcao sort altera o array para deixalo na ordem
print_r(sort($novo_decimais));