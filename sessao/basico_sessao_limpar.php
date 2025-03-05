<?php
session_start();
session_destroy();
header('Location: /php-course/exercicio.php?dir=sessao&file=basico_sessao.php');