<div class="titulo">Desafio Meses</div>

<?php

$meses = array(
    1 => "Janeiro",
    2 => "Fevereiro",
    3 => "Março",
    4 => "Abriu",
    5 => "Maio",
    6 => "Junho",
    7 => "Julho",
    8 => "Agosto",
    9 => "Setembro",
    10 => "Outubro",
    11 => "Novembro",
    12 => "Dezembro"
);

// Basta indexar o primeiro elemento com 1, para todos os outros seguirem esse padrao sem precisar indexar todos
echo "<br>". $meses[5];
echo "<br>". $meses[1];
echo "<br>". $meses[12];
