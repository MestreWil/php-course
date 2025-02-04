<div class="titulo">Traits 02</div>

<?php

trait validacao 
{
    public function validarString($str)
    {
        return isset($str) && $str !== '';
    }
}

trait validacaoMelhor 
{
    public function validarString($str)
    {
        return isset($str) && trim($str);
    }
}

class Usuario 
{
    use validacao, validacaoMelhor 
    {
        // resolver o qual metodo da trait vai entrar
        validacaoMelhor::validarString insteadOf validacao;

        // renomear o metodo de uma trait
        validacao::validarString as validarSimples; 
    }
}

$usuario = new Usuario();
var_dump($usuario->validarString('  '));