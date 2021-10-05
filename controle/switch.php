<div class="titulo">Switch</div>

<?php
$categoria = 'luxo';
$preco = 0.0;
$carro = '';

if($categoria == 'luxo'){
    $carro = 'Mercedes';
    $preco = 250000;
}else if( $categoria == 'SUV'){
    $carro = 'Renegate';
    $preco = 80000;
}else if($categoria == 'Sedan'){
    $carro == 'Etios';
    $preco == '55000';
}else {
    $carro = 'Mobi';
    $preco = 33000;
}

$precoFormatado = number_format($preco, 2, ',', '.');
echo "<p>Carro: $carro<br>Preço: R$ $preco</p>";

$categoria = 'luxo';

switch (strtolower($categoria)) {
    case 'luxo':
        $carro = 'Mercedez';
        $preco = 2500000;
        break;
    case 'suv': 
        $carro = 'Renegate';
        $preco = 80000;
    break;
    case 'Sedan':
        $carro == 'Etios';
        $preco == '55000';
        break;
    default:
        $carro = 'Mobi';
        $preco = 33000;
        break;
}

$precoFormatado = number_format($preco, 2, ',','.');
echo "<p>Carro: $carro<br>Preço: R$$preco</p>";