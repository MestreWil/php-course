<div class="titulo">Desafio Switch</div>

<form action="#" method="post"> 
    <input type="text" name="param">
    <select name="conversao" id="conversao">
        <option value="km-milha">Km > Milha</option>
        <option value="milha-km">Milha > Km</option>
        <option value="metro-km">Metro > Km</option>
        <option value="km-metro">Km > Metro</option>
    </select>
    <button>Calcular</button>
</form>

<style>
    form > * {
        font-size: 1.8rem;

    }


</style>

<?php


switch ($_POST['conversao']){
    case 'metro-km':
        $resultado = $_POST['param']/1000;
        echo "$_POST[param] equivale a $resultado Km";
    case 'km-metro':
        $resultado = $_POST['param']*1000;
        echo "$_POST[param] equivale a $resultado M";
    case 'km-milha':
        $resultado = $_POST['param']/1.6;
        echo "$_POST[param] equivale a $resultado Milhas";
    case 'km-milha':
        $resultado = $_POST['param']*1.6;
        echo "$_POST[param] equivale a $resultado Km";
}
