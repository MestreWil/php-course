<div class="titulo">Erros Personalizados</div>

<?php

class FaixaEteriaException extends Exception
{
    public function __construct($massage, $code = 0, $previus = null)
    {
        echo "Errp personalizado: $massage<br>";
        parent::__construct($massage, $code, $previus);
    }
    
}

function calcularTempoAposentadoria($idade)
    {
        if($idade < 18)
        {
            throw new FaixaEteriaException('Ainda está muito longe!');
        }
        if($idade > 70)
        {
            throw new FaixaEteriaException('Já deveria estar aposentado!');
        }

        return 70 - $idade;
    }


$idadeAvaliadas = [15, 30, 60, 80];

foreach($idadeAvaliadas as $idade){
    try {
        $tempoRestante = calcularTempoAposentadoria($idade);
        echo "Idade: $idade, $tempoRestante anos restantes<br>";
    } catch(FaixaEteriaException $e){
        echo "Não foi possível calcular para $idade anos. <br>";
        echo "Motivo: {$e->getMessage()}<br>";
    }
}

echo "<br>Fim!";