<div class="titulo">Classe Abstrata</div>

<?php

abstract class Abstrata {
    public abstract function metodo1();
    abstract protected function metodo2($param);
}

abstract class FilhaAbstrata extends Abstrata {
    public function metodo1(){
        echo "Executando método 1 <br>";
    }

    abstract public function metodo3();
}

class Concreta extends FilhaAbstrata {
    public function metodo1() {
        echo "Excutando método 1 extendido <br>";
        parent::metodo1();
    }

    protected function metodo2($param)
    {
        echo "Excutando método 2 com parametro $param <br>";
    }
    public function metodo3(){
        echo "Executando metodo 3 <br>";
        $this->metodo2('interno');
    }
}

$c = new Concreta();
$c->metodo1();
$c->metodo3();