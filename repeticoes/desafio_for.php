<div class="titulo">Desafio For</div>

<?php

$resultado = "";
for($i = 1; $i <= 5; $i++){
    for($j = 1; $j <=$i; $j++ ){
        $resultado .= "#";
    }
    $resultado .= "<br>";
}
echo $resultado;
echo "<hr>";

$resultadoSemSoma = "";
for($i = 5; $i >= 1; $i--){
    for($j = 5; $j >=$i; $j--){
        $resultadoSemSoma .= "#";
    }
    $resultadoSemSoma .= "<br>";
}

echo $resultadoSemSoma;

echo "<hr>";

$impressao = "";
for($count = 1; $count <= 5; $count++){
    $impressao .= "#";
    echo "$impressao <br>";
}

echo "<hr>";
for($impressao2 = "#"; $impressao2 !== "######"; $impressao2 .= "#"){
    echo "$impressao2 <br>";
}