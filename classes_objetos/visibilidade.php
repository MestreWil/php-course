<div class="titulo">Visibilidade</div>

<?php

class A {
    public $publico = 'Público'; // Pode ser acessado de qualquer forma
    protected $protegido = 'Protegido'; //So pode ser acessado por heranca
    private $privado = 'Privado'; // So pode ser acessado dentro da classe, por meio de metodos

    public function mostrarA() {
        $this->naoMostrar(); // Aqui pode pois esta sendo usada dentro da classe
        echo "Class A) Publico = {$this->publico}<br>";
        echo "Class A) Protegido = {$this->protegido}<br>";
        echo "Class A) Privado = {$this->privado}<br>";
    }

    protected function vaiPorHeranca() {
        echo "Serei transmitido por herança!<br>";
    }

    private function naoMostrar() {
        echo 'Não vou imprimir!';
    }
}

class B extends A {
    public function mostrarB(){
        echo "Class B) Publico = {$this->publico}<br>";
        echo "Class B) Protegido = {$this->protegido}<br>";
        echo "Class B) Privado = {$this->privado}<br>"; //Privado é restrito a classe que ele foi definido

        parent::vaiPorHeranca(); // como é uma funcao protegida, ou seja, pode ser transmitida por heranca, vai funcionar
    }
}

$a = new A();
echo $a->publico;
$a->mostrarA();
// $a->naoMostrar(); Nao pode pois a funcao é privada

echo "<br>";
$b = new B();
$b->mostrarA(); // Como b é filho de A, ele herda os metodos de A
echo "<br>";
$b->mostrarB();

//$b->vaiPorHeranca(); nao pode ser acessado, pois como a funcao é protegia(protected) ela so pode ser utilizada dentro da classe filha
echo "Fim!";

