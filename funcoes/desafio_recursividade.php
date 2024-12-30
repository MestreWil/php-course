<div class="titulo">Desafio Recursividade</div>

<?php

/*
$array= [1, 2, [3, 4,5], 6, [7,[8, 9]], 10];
*/

$array= [1, 2, [3, 4,5], 6, [7,[8, 9]], 10];
// foi utilizado desafio($elemento, $nivel . $nivel[0]); com o $nivel[0]
// pois a string no php é como se fosse um array de caracteres, e vc pode pegar usando o [0] que nem o array
// foi feito assim pois a cada uso da recursividade o simbolo > é conctenado com ele mesmo na proxima recursao
function desafio($array, $nivel = '>'){
    foreach($array as $elemento){
        if(is_array($elemento)){
            desafio($elemento, $nivel . $nivel[0]);
        } else {
            echo "$nivel $elemento<br>";
        }
    }
}

desafio($array);
