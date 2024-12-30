<div class="titulo">Map & Filter</div>

<?php

$notas = [5.8, 7.3, 9.8, 6.7];
$notasFinais1 = [];
foreach($notas as $nota) {
    $notasFinais1[] = round($nota);
}
print_r($notasFinais1);

echo "<br>";

//No PHP 8, vc tem que colocar a funcao usada no array map em formato string
$notasFinais2 = array_map('round',  $notas);
print_r($notasFinais2);

function aprovados($nota){
    return $nota >= 7;
}

echo "<br>";
$apenasOsAprovados2 = array_filter($notas, 'aprovados');

print_r($apenasOsAprovados2);