<div class="titulo">Escrever Arquivo</div>

<?php

$arquivo = fopen('teste.txt', 'w'); 

fwrite($arquivo, "Escrevendo no arquivo usando PHP!\n");

$str = "Sou foda demais!\n";
fwrite($arquivo, $str);
fclose($arquivo);

$arquivo = fopen('teste.txt', 'w');// 'w' sobrescreve o arquivo e cria se não existir
fwrite($arquivo, "Sobrescrevendo o arquivo!\n");
fclose($arquivo);

$arquivo = fopen('teste.txt', 'a'); // 'a' adiciona ao final do arquivo
fwrite($arquivo, "Adicionando mais uma linha!\n");
fclose($arquivo);

ini_set('display_errors', 1);
$arquivo = fopen('teste.txt', 'x'); // 'x' cria um novo arquivo, falha se já existir