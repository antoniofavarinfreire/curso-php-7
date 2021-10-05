<div class="titulo">Basico</div>

<?php
$lista = array(1, 2, 3.4, "texto");
echo $lista . '<br>';
var_dump($lista);
echo '<br>';
print_r($lista);

$texto = 'Esse é um texto de teste';

echo '<br>' . $texto [0];
echo '<br>' . $texto [1];
echo '<br>' . $texto [2];
echo '<br>' . $texto [11]; // Cuidado
echo '<br>' . mb_substr($texto, 10, 1);