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

const FATOR_KM_MILHA = 0.621371;
const FATOR_METRO_KM = 1000;

$parametro = $_POST['param'] ?? 0;

switch($_POST['conversao']){
    case 'km-milha':
        $distancia = $parametro * FATOR_KM_MILHA;
        $msg = "$parametro Km = $distancia Milhas";
        break;

    case 'milha-km':
        $distancia = $parametro / FATOR_KM_MILHA;
        $msg = "$parametro Milhas = $distancia km";
        break;
    
    case 'metro-km':
        $distancia = $paremetro * FATOR_METRO_KM;
        $msg = "$paremetro Metros = $distancia km";
        break;
    case 'km-metro':
        $distancia = $parametro / FATOR_METRO_KM;
        $msg = "$parametro Km = $distancia metros";
        break;
    
    default:
        $mensagem = "Nenhum valor calculado";
    
}
echo "<br>$msg<br>";









// Verificacao para caso o parametro nao seja setado ele atribua o valor 0 a ele

// switch ($_POST['conversao']){
//     case 'metro-km':
//         $resultado = $_POST['param']/1000;
//         echo "$_POST[param] equivale a $resultado Km";
//         break;
//     case 'km-metro':
//         $resultado = $_POST['param']*1000;
//         echo "$_POST[param] equivale a $resultado M";
//         break;
//     case 'km-milha':
//         $resultado = $_POST['param']/1.6;
//         echo "$_POST[param] equivale a $resultado Milhas";
//         break;
//     case 'km-milha':
//         $resultado = $_POST['param']*1.6;
//         echo "$_POST[param] equivale a $resultado Km";
//         break;
// }
