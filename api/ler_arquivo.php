<div class="titulo">Ler arquivo</div>

<?php

$arquivo = fopen('teste.txt', 'r'); // 'r' abre o arquivo para leitura
echo fread($arquivo, 10); // Lê os primeiros 10 bytes do arquivo
echo "<br>";
echo fread($arquivo, 10); // Lê os próximos 10 bytes do arquivo
echo "<br>";
fclose($arquivo); // Fecha o arquivo

echo "<hr>";

$arquivo = fopen('teste.txt', 'r');
$tamanho = filesize('teste.txt'); // Obtém o tamanho do arquivo
echo fread($arquivo, $tamanho); // Lê todo o conteúdo do arquivo
fclose($arquivo);
echo "<hr>";
$arquivo = fopen('teste.txt', 'r');
echo fgets($arquivo); // Lê uma linha do arquivo
echo "<br>";
echo fgets($arquivo); // Lê a próxima linha do arquivo
fclose($arquivo);

echo "<hr>";
$arquivo = fopen('teste.txt', 'r');
while (!feof($arquivo)) { // Loop até o final do arquivo
    $linha = fgets($arquivo); // Lê uma linha do arquivo
    echo $linha . "<br>";
}
fclose($arquivo);
echo "<hr>";
$arquivo = fopen('teste.txt', 'r');
while (!feof($arquivo)) { // Loop até o final do arquivo
    $linha = fgetc($arquivo); // Lê um caractere do arquivo
    echo $linha . "<br>";
}
fclose($arquivo);