<?php
session_start();
include_once('cookie_usuario.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200..700&display=swap" rel="stylesheet">
     <link rel="stylesheet" href="assets/css/estilo.css">
     <link rel="stylesheet" href="assets/css/exercicio.css">
     <title>Curso PHP</title>
</head>
<body class="exercicio">
     <header class="cabecalho">
          <h1>Curso PHP</h1>
          <h2>Visualização do Exercício</h2>
     </header>
     <nav class="navegacao">
          <span class='usuario'>Usuário: <?= $_SESSION['usuario'] ?></span>
          <a href=<?="{$_GET['dir']}/{$_GET['file']}.php"?> class="verde">Sem formatação</a>
          <a href="index.php" class="azul">Voltar</a>
          <a href="logout.php" class="vermelho">Logout</a>
     </nav>
     <main class="princial">
          <div class="conteudo">
               <?php
                   // include($_GET['dir']."/teste.php");
                   //include("{$_GET['dir']}/{$_GET['file']}.php")
                   include(__DIR__ . "/{$_GET['dir']}/{$_GET['file']}.php")
               ?>
          </div>
     </main>
     <footer class="rodape">
          COD3R & ALUNOS ₢ <?= date('Y') ?>
     </footer>
</body>
</html>