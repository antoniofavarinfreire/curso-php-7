<div class="titulo">Operadores Relacionais</div>

<?php
// var_dump(1==1);
// var_dump(1>1);
// var_dump(1<= 7);

var_dump(111== '111');
var_dump(111 === '111'); //igualdade estrita, leva em conta o tipo da igualdade;
var_dump(111 != '111');
var_dump(111!== '111'); //diferença estrita

echo "<p class='divisao'> Relacionais no If/Else</p><hr>";
$idade = 15;

if($idade < 18){
    echo "Menor de Idade = $idade anos<br>";
}else if($idade <= 65){
    echo "Adulto = $idade anos<br>";
}else {
    echo "Terceira Idade = $idade anos!";
}

echo '<p class="divisao">Spaceship</p><hr>';

var_dump(5 <=> 3); // Positivo caso o esquerdo seja maior que o direito
var_dump(5<=>5); // zero caso seja igual.
var_dump(3<=>5); // Negativo, caso esquerda seja menor que direita.

echo '<p class="divisao">Valores podem ser V ou F</p><hr>';
var_dump(!!5);
var_dump(!!0);
var_dump(!!"");


