<div class="titulo">Switch</div>

<?php

$categoria = 'nada';
$preco = 0.0;
$carro = '';

if ($categoria === 'luxo') {
    $carro = 'Mercedes';
    $preco = 250000;
} else if ($categoria === 'SUV') {
    $carro = 'Renegade';
    $preco = 80000;
} elseif ($categoria === 'Sedan') {
    $carro = 'Etios';
    $preco = 50000;
} else {
    $carro = 'Mobi';
    $preco = 33000;
}

$precoFormatado = number_format($preco, 2, ',','.');
echo "<p>Carro: $carro<br>Preço: R$ $precoFormatado</p>";

$categoria = 'SUV';
switch (strtolower($categoria)) {
    case 'luxo';
        $carro = 'Mercedes';
        $preco = 250000;
        break;
    case 'suv';
    case 'suv Básico';
        $carro = 'Renegade';
        $preco = 80000;
        break;
    case 'sedan';
        $carro = 'Etios';
        $preco = 50000;
        break;
    default:
        $carro = 'Mobi';
        $preco = 33000;
        break;
}

$precoFormatado = number_format($preco, 2 ,',','.');

echo "<p>Carro: $carro<br>Preço: R$ $precoFormatado";