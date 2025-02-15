<div class="titulo">Include Vs Require</div>

<?php

echo "Usando include com arquivo inexistente...<br>";
ini_set('display_errors', 1);
include("arquivo_inexistente.php");
echo "Usando include com arquivo inexistente...<br>";