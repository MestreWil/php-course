<div class="titulo">Desafio data</div>

<form action="#" method="post">
    <div class="entrada">
        <label for="dia">Dia</label><br>
        <input type="number" value="01" id="dia" name="dia">
    </div>
    <div class="entrada">
        <label for="mes">Mês</label><br>
        <input type="number" value="01" id="mes" name="mes">
    </div>
    <div class="entrada">
        <label for="ano">Ano</label><br>
        <input type="number" value="1970" id="ano" name="ano">
    </div>
    <button>Exibir Data</button>
</form>


<?php
class SuaData {
    public $dia = null;
    public $mes = null;
    public $ano = null;

    public function showData(){
        echo "{$this->dia} / {$this->mes}/ {$this->ano}";
    }
}

$dia = isset($_POST['dia']) ? $_POST['dia'] : '01';
$mes = isset($_POST['mes']) ? $_POST['mes'] : '01';
$ano = isset($_POST['ano']) ? $_POST['ano'] : '1970';

$novaData = new SuaData();

$novaData->dia = $dia;
$novaData->mes = $mes;
$novaData->ano = $ano;

$novaData->showData();
?>
<style>

.entrada {
        display: inline-block;
    }
</style>