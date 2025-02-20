<div class="titulo">Error Handler</div>

<?php

ini_set('display_erros', 1);//exibe warning padrao
//echo 4 / 0 . '<br>';

error_reporting(E_ERROR);//exibe apenas o erro
//echo 4 / 0 . '<br>';

error_reporting(E_ALL);// exibe todos os erros
echo 4 / 0 . '<br>';

include 'arquivo_inexistente.php';

function filtrarMensagem($error, $errstrig)
{
    $text = 'include';
    //$text = 'by zero';
    return !!stripos(" $errstrig", $text);
}

set_error_handler('filtrarMensagem', E_WARNING); // seta o fitro da mensagem de erro

echo '<hr>';
echo 4 / 0 . '<br>';

include 'arquivo_inexistente.php';

restore_error_handler();// volta o padrão de mensagem de erro do PHP