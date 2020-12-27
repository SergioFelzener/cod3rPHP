<div class="title">Switch Case</div>

<?php

$categoria = 'Luxo';
$preco = 0.0;
$carro = '';

if ($categoria === 'Luxo') {
    $carro = 'Mercedes';
    $preco = '250000';
} else if ($categoria === 'SUV') {
    $carro = 'Renegade';
    $preco = '150000';
} else if ($categoria === 'Sedan') {
    $carro = 'Etios';
    $preco = '70000';
} else {
    $carro = 'Mobi';
    $preco = '30000';
}

$precoFormatado = number_format($preco, 2, ',', '.');
echo "<p>Carro : $carro<br>Preço : R$ $precoFormatado</p>";


$categoria = "Hatch";

switch (strtolower($categoria)) {
    case 'luxo':
        $carro = 'Mercedes';
        $preco = '250000';
        break;
    case 'suv':
    case 'suv basico': 
        $carro = 'Renegade';
        $preco = '150000';
        break;
    case 'sedan':
        $carro = 'Etios';
        $preco = '70000';
        break;
    case 'hatch':
        $carro = 'Clio';
        $preco = '15000';
        break;
    default:
    $carro = 'Uno'; 
    $preco = '11000';

}

$precoFormatado = number_format($preco, 2, ',', '.');
echo "<p>Carro : $carro<br>Preço : R$ $precoFormatado</p>";






?>