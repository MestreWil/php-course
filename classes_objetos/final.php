<div class="titulo">Final</div>

<?php
// o final é usado para deixar impossivel um metodo de ser sobrescrito ou alterado por herança
abstract class Abstrata
{
    abstract public function metodo1();

    final public function metodo2()
    {
        echo "Não vou mudar! <br>";
    }
}

class Classe extends Abstrata 
{
    public function metodo1()
    {
        echo 'Executado metodo 1<br>';
    }

    // public function metodo2()
    // {
    //     echo 'Executando metodo 2 <br>';
    // }
}

$classe = new Classe();
$classe->metodo1();
$classe->metodo2();

final class Unica 
{
    public $att = 'Eae man';
}

$unica = new Unica();
echo $unica->att;
// class Duplicata extends Unica {
//     public $att;
// }