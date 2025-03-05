<div class="titulo">Sessão</div>

<?php
session_start(); //no começo do arquivo que iremos trabalhar com sessão, sempre coloque o session_start()
error_reporting(E_ERROR);
print_r($_SESSION);
echo '<br>';

if(!$_SESSION['nome']){
    $_SESSION['nome'] = 'Gabriel';
}
if(!$_SESSION['email']){
    $_SESSION['email'] = 'gabriel@azmail.com';
}

?>

<p>
    <a href='/php-course/exercicio.php?dir=sessao&file=basico_sessao_alterar'>Alterar Sessão</a>
</p>