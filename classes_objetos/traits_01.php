<div class="titulo">Traits 01</div>

<?php
// A trait permite a reutilização de codigo sem o uso de herança
// diferente de uma interface onde vc define o nome do metodo e entrada e saia
// na trait vc literalmente escreve o metodo, e usa a palavra use para chamalo dentro da classe

trait validacao 
{
    public function validarString($str)
    {
        return isset($str) && $str !== '';
    }
}

trait validacaoMelhor 
{
    public function validarStringMelhor($str)
    {
        return isset($str) && trim($str);
    }
}

class Usuario 
{
    use validacao, validacaoMelhor;
}

$usuario = new Usuario();
var_dump($usuario->validarString('  '));
var_dump($usuario->validarStringMelhor('  '));
