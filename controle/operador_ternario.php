<div class="titulo">Operador Ternario</div>

<?php

$idade = 70;
$status;

$status = $idade>= 18 ? 'Maior de idade' : 'Menor de idade';

echo $status;

$status = $idade >= 18 ? $idade>= 65 ? 'Maior de idade' : 'Terceira idade': 'Menor de idade';