<div class="titulo">Operadores Lógicos</div>

<?php
echo "<p class='divisao'>V ou F</p><hr>";
var_dump(true);
echo '<br>';
var_dump(!true); // ! negação logica (not)

echo "<p class='divisao'>Tabela verdade 'AND' (E)</p><hr>";
var_dump(true && true);
echo '<br>';
var_dump(true && false);
echo '<br>';
var_dump(false && true);
echo '<br>';
var_dump(false && false);

var_dump(true and true);
echo '<br>';
var_dump(true and false);
echo '<br>';
var_dump(false and true);
echo '<br>';
var_dump(false and false);

echo "<p class='divisao'>Tabela verdade 'OR' (OU)</p><hr>";
var_dump(true || true);
echo '<br>';
var_dump(true || false);
echo '<br>';
var_dump(false || true);
echo '<br>';
var_dump(false || false);

var_dump(true or true);
echo '<br>';
var_dump(true or false);
echo '<br>';
var_dump(false or true);
echo '<br>';
var_dump(false or false);

echo "<p class='divisao'>Tabela verdade 'XOR' (OU Exclusivo)</p><hr>";
var_dump(true xor true);
echo '<br>';
var_dump(true xor false);
echo '<br>';
var_dump(false xor true);
echo '<br>';
var_dump(false xor false);

echo "<p class='divisao'>Exemplo</p><hr>";
$idade = 65;
$sexo = 'F';
$pagouPrevidencia = true;
$criterioHomem   = ($idade >= 65 && $sexo === 'M');
$criterioMulher  = ($idade >= 60 && $sexo === 'F');
$atingiuCriterio = $criterioHomem || $criterioMulher;
$podeSeAposentar = $pagouPrevidencia && $atingiuCriterio;
echo "Pode se aposentar -> $podeSeAposentar.<br>";
if($idade >= 60 && $sexo ==='F'){
    echo "Pode se aposentar -> $sexo";
}else if($idade >= 65 && $sexo === 'M'){
    echo "Pode se aposentar -> $sexo";
}else {
    echo 'Vai trabalhar que ainda é cedo para aposentar';
}
?>
