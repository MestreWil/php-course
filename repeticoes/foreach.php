<div class="titulo">For Each</div>

<?php
$array = [
    1 => 'Domingo',
    'Segunda',
    'Terça',
    'Quarta', 
    'Quinta',
    'Sexta',
    'Sábado'
];

foreach ($array as $valor){
    echo "$valor <br>";
}
foreach ($array as $indice => $valor){
    echo "$indice => $valor <br>";
}

$matrix = [
    ['a', 'e', 'i', 'o', 'u'],
    ['b', 'c', 'd']
];
foreach($matrix as $linha){
    //echo "$linha <br>"; 
    foreach($linha as $valor){
        echo "$valor";
    }
    echo "<br>";
}

// É possivel manipular e mudar o array com foreach, o & é para apontar para a referencia de memoria do array
// sem o & o array permanece o mesmo
$numeros = [1, 2, 3, 4, 5, 6];

foreach ($numeros as &$dobrar){
    $dobrar *= 2; 
    echo "$dobrar <br>";
}
print_r($numeros);