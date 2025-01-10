<div class="titulo">Interface</div>

<?php

interface Animal {
    function respirar();

}
// usar a palavra implements implementar a interface
// Uma classe pode implementar multiplas interfaces
// pode definir o tipo do dado retornado na funcao na interface, que vai ser implementada pela classe
// todos os metodos de uma interface são publicos
// uma interface pode extender outra interface
// No PHP não é possivel uma classe herda de multiplas classes
interface Canino extends Animal{
    function latir(): string;
}
class Cachorro implements Canino {

    function __construct()
    {
        echo "Cachorro Criado<br>";
    }
    function respirar()
    {
        echo "Respirando<br>";
    }
    function latir(): string
    {
        return "Au Au<br>";
    }
}
$dog = new Cachorro;
$dog->respirar();
echo $dog->latir();
echo "<br>". var_dump($dog);
echo "<br>". var_dump($dog instanceof Cachorro);
echo "<br>". var_dump($dog instanceof Canino);
echo "<br>". var_dump($dog instanceof Animal);