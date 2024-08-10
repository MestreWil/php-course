<div class="titulo">Desafio String</div>

<?php

// Enunciado:
// Avaliando os métodos da documentação da string;
// qual o método que a posicao do texto 'abc'
// na string '!AbcaBcabc' retorne 1?
$string = '!AbcaBcabc';
echo strpos($string, 'abc'). '<br>';
echo stripos($string, 'abc'). '<br>';
echo stripos(strtolower($string), 'abc'). '<br>';