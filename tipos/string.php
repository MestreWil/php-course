<div class="titulo">Tipo String</div>

<?php 
echo 'Eu sou uma String';
echo '<br>';
var_dump("Eu também"); // o padrão normal do var_dump conta o acento no tamanho da string
echo '<br>';

// concatenação 
echo "Nós também" . 'somos';
echo '<br>', "Também aceito", " virgulas", '<br>';

echo "'Teste ' ".'"Teste" '.'\'Teste\' '. "\"Teste\" ". "\\";

print("<br>Também existe a função print");

// ALGUMAS FUNCOES

echo '<br>'. strtoupper('maximizando'); //deixa toda a string maiuscula
echo '<br>'. strtolower('MINIMIZANDO'); //deixa toda a string minuscula
echo '<br>'. ucfirst('só a primeira letra'); //deixa so a primeira letra da string maiuscula
echo '<br>'. ucwords('todas as palavras'); //deixa todas as letras das palavras maiusculas
echo '<br>'. strlen('Quantas letras?'); //diz o tamanho da string
echo '<br>'. mb_strlen("Eu também", "utf-8"); //dis o tamanho da string no padrao utf-8 
echo '<br>'. substr('Só uma parte mesmo', 7, 6); // parte a string com base o indice
echo '<br>'. str_replace('isso', 'aquilo', 'Trocar isso isso'); //substitui o primeiro argumento isso pelo segundo argumento aquilo na string
echo '<br>'. "Número é: ". 123;

