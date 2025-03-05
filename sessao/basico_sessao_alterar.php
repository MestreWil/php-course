<?php
session_start();
print_r($_SESSION);
?>

<p>
    <b>Nome: </b> <?= $_SESSION['nome'] ?><br>
    <b>E-mail: </b> <?= $_SESSION['email'] ?><br>
</p>

<?php

$_SESSION['email'] = 'gabrielfilho@emailaz.com.br';
?>
<p>
    <a href='/php-course/exercicio.php?dir=sessao&file=basico_sessao_limpar'>Limpar Sessão</a>
</p>
<p>
    <a href='/php-course/exercicio.php?dir=sessao&file=basico_sessao'>Volta</a>
</p>
