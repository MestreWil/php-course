<div class="titulo">Include</div>

<?php

echo "Executei essa linha do arquivo include<br>";
include('include_arquivo.php');

echo soma(5, 2) . "<br>";

echo "A variavel do arquivo include_arquivo é: {$var}";