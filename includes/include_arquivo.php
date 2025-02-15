<?php 

echo "Carregando: include_arquvio<br>";

$var = 'Estou definida';

// a funcao function_exists verifica se a funcao existe dentro do arquivo com esse nome
if(!function_exists('soma')){
    function soma($a, $b)
    {
        return $a + $b . "<br>To sendo usado do arquivo include_aquivo.php"; 
    }
}
