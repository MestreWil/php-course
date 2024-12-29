<div class="titulo">Argumentos e Escopo</div>

<?php 

function obterMensagem(){
    return 'Seja Bem Vindo(a)!';
}

echo obterMensagem();

$mensagem = obterMensagem();

echo "<br>".$mensagem."<br>";

var_dump(obterMensagem());

function obterMensagemComNome($nome){
    return "Bem vindo, {$nome}!";
}

echo "<br>". obterMensagemComNome("Mestre Will");

function soma($a, $b){
    return $a + $b;
}

echo "<br>", soma(3, 3);

$x = 10;
$y = 25;

echo "<br>", soma($x, $y);

function trocaValor($a, $novoValor){
    $a = $novoValor;
}

$variavel = 1;

trocaValor($variavel, 3);

echo "<br>", $variavel;

function trocarValorDeVerdade(&$a, $novoValor){
    $a = $novoValor;
}

trocarValorDeVerdade($variavel, 3);

echo "<br>", $variavel;