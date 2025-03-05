<div class="titulo">Gerenciador de Sessão</div>

<?php
//session_id('568fffed83389ea6ahve1fliie');
session_start();
echo session_id();

$contador = &$_SESSION['contador'];

$contador = $contador ? $contador + 1 : 1;

echo '<br>' . $_SESSION['contador'];

if($_SESSION['contador'] % 5 ===0)
{
    session_regenerate_id();
}