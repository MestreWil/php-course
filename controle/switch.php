<div class="titulo">Switch</div>

<?php

$categoria = 'Luxo';
$preco = 0.0;
$carro = '';

if($categoria === 'Luxo'){
    $carro = 'Mercedes';
    $preco = 250000.00;
} else if ($categoria === 'SUV') {
    $carro = 'Renegande';
    $preco = 80000.00;
} elseif ($categoria === 'Sedan'){
    $carro = 'Etios';
    $preco = 55000.00;
} else {
    $carro = 'Mobi';
    $preco = 33000.00;
}

$precoFormatado = number_format($preco, 2, ',', '.');
echo "<p>Carro: $carro<br>Preço: R$ $preco</p>";


$categoria = 'luxo';

switch (strtolower($categoria)){
    // pode colocar os cases em bloco de codigo
    case 'luxo':{
        $carro = 'Mercedes';
        $preco = 250000.00;
        break;
    }

    // vc pode definir varios cases com o mesmo resultado, abaixo um exemplo, se for suv ou suv basico ele vai da o mesmo resultado
    case 'suv':
    case 'suv basico':
        $carro = 'Renegade';
        $preco = 80000.00;
        break;

    case 'sedan':
        $carro = 'Etios';
        $preco = 55000.00;
        break; 

    case 'mobi':
        $carro = 'Mobi';
        $preco = 33000.00;
        break;

    }

    $precoFormatado = number_format($preco, 2, ',', '.');
    echo "<br><br><p>Carro: $carro<br>Preço: R$ $preco</p>";
    