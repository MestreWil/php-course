<div class="titulo">Include Vs Require</div>

<?php

ini_set('display_errors', 1);
echo "Usando include com arquivo inexistente...<br>";

include("arquivo_inexistente.php");
echo "Usando include com arquivo inexistente...<br>";
require("arquivo_inexistente.php");

echo "Yo soy foda!";

// A diferença entre o include e o require é que usando o include a aplicação não para caso o PHP não 
// encontre o arquivo solicitado, ja o require ele da um erro fatal e mata a aplicação apartir do momento em que ele 
// é chamado