<div class="titulo">Operações</div>

<?php
$dados1 = [
    "nome"  => "José",
    "idade" => 28
];

$dados2 = [
    "naturalidade" => "Fortaleza"
];

$dadosCompletos = $dados1 + $dados2; //sobrecarga de operadores.
print_r($dadosCompletos);

echo '<br>' . is_array($dadosCompletos); //define se é um array
echo '<br>' . count($dadosCompletos);

echo '<br>';

$indice = array_rand($dadosCompletos);
echo "$indice = $dadosCompletos[$indice]";
echo '<br>';
echo "{$dadosCompletos['idade']}"; //par de chaves difine o que será interpolado.
echo '<br>';
echo "${dadosCompletos['idade']}";

unset ($dadosCompletos["nome"]); // apagar informação
echo '<br>';
print_r ($dadosCompletos);

unset($dadosCompletos);
echo '<br>';
var_dump($dadosCompletos);

$impares = [1, 3, 5, 7, 9];
$pares = [2, 4, 6, 8];

$decimais = $pares + $impares;
echo '<br>';
print_r($decimais);

$decimais = array_merge($pares, $impares); // concatenação de array
echo '<br>';
print_r($decimais);

sort($decimais); //Ordena o array
echo '<br>';
print_r($decimais);