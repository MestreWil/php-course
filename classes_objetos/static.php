<div class="titulo">Membros Estáticos</div>

<?php

class A {
    public $naoStatic = 'Váriavel de Instância';

    public static $static = 'Variável de Classe (estaticá)';

    public function mostraA(){
        echo "Não estático = {$this->naoStatic}<br>";
        // Tentativa 1
        // echo "Estática = {$this->static}<br>";
        // echo "Estática = {self::static}<br>";
        echo "Estática = ".self::$static."<br>";
    }

    public static function mostraStaticA() {
        //echo "Não estática = {$this->naoStatic}<br>";
        echo "Estática = ".self::$static."<br>";
    }
}
// vc so acessa atributos static usando self::$atributo
// um atributo public pertence a instancia,
// ja um atributo static pertence a classe
$objeto = new A();

$objeto->mostraA();

$objeto->mostraStaticA(); //Nao é a forma ideal

echo A::mostraStaticA(); //É a forma ideal, acessar diretamente pela classe

