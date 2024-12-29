<div class="titulo">Argumentos Padrão</div>

<?php

function saudacao($nome = 'Senhor(a)', $sobrenome = 'Cliente'){
    return "Bem vindo! $nome $sobrenome <br>";
}

echo saudacao();
echo saudacao(NULL);
echo saudacao(NULL, NULL);

function anotarPedido($comida, $bebida = 'Água'){
    echo "Para comer: $comida <br>";
    echo "Para Beber: $bebida <br>";
}

anotarPedido('Hamburguer');

anotarPedido('Pizza', 'Refrigerante'); 

function anotarPedido2($bebida = 'Água', $comida){
    echo "Para comer: $comida <br>";
    echo "Para Beber: $bebida <br>";
}
//anotarPedido2('Hamburguer');

anotarPedido2('Pizza', 'Refrigerante');