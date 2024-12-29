<div class="titulo">Desafio Palindromo</div>

<form action="#" method="post">
    <div class="entrada">
        <label for="palavra">Digite a palavra que você acha que é um palimdromo:</label>
        <input type="text" id="palavra" name="palavra">
    </div>
    <button>Verificar</button>
</form>

<?php
function verificaPalindromo($palavra){
    $listaLetras = [];
    $letrasInvertidas = [];
    for($i = 0; $i < strlen($palavra); $i++){
        $listaLetras[] = $palavra[$i];
    }

    for($j = strlen($palavra) -1; $j >= 0; $j--){
        $letrasInvertidas[] = $palavra[$j];
    }
    return $listaLetras == $letrasInvertidas ? 'Sim' : 'Não';
} 

$palavra = isset($_POST['palavra']) ? $_POST['palavra'] : '';

if(isset($_POST['palavra'])) echo verificaPalindromo($palavra);

/*
SOLUÇÃO DO CURSO 

function palindromo($palavra){
    $ultimoIndice = strlen($palavra) - 1;

    for($i = 0; $i <= $ultimoIndice; $i++){
        if($palavra[$i] !== $palavra[$ultimoIndice - $i]){
            return 'Não';
        }
    }
    return 'Sim';
}

A FUNCAO NATIVA strrev() inverte uma string

function palindromoSimples($palavra){
    return $palavra === strrev($palavra) ? 'Sim' : 'Não';
}
*/

?>