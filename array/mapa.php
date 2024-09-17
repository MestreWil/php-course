<div class="titulo">Mapa</div>

<?php

$dados = array(
    "idade" => 26,
    "cor" => "azul",
    "peso" => 80.0
);

print_r($dados);
echo "<br>";
var_dump($dados['cor']);
echo "<br>";
$dados["profissao"] = "Garoto de Programa";
print_r($dados);
echo "<br>";
//joga a chave valor para a primeira posicao
$dados[false] = "vamo f1?";
print_r($dados);

