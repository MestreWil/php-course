<?php namespace Desafio; use Error;?> 

<?php
class ErroPersonalizado extends Error
{
    public function __construct($mensagem, $codigo  = 0, $previa = null)
    {
        echo "Erro personalizado: $mensagem<br>";
        parent::__construct($mensagem, $codigo, $previa);
    }
}

