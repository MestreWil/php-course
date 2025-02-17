<?php namespace contexto; ?>

<div class="titulo">Exemplo Básico</div>

<?php

echo __NAMESPACE__ . '<br>';

const constante1 = 123; 
define('contexto\constante2', 234); 
define(__NAMESPACE__ . '\constante3', 456);

/* no php existem 2 formas de definir constantes, uma usando a palavra reservada const e a outra
    e a outra usando o define.

    para usar o define, utilize ele colacando o namespace e depois o nome da constante de deseja definar
    caso contrario estara criando uma constante global no namespace do PHP
*/
function strpos($str, $texto)
{
    echo "Buscando o texto '{$texto}' em '{$str}'<br>";
    return 1;
}

echo strpos('Texto genérico para busca', 'busca') . '<br>';// acessando funcao definida no namespace contexto
echo \strpos('Texto genérico para busca', 'busca') . '<br>';// acessando funcao definida no namespace global do PHP
