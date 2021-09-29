<div class="titulo">Desafio PI</div>

<?php
    echo pi();
    $pi = 3.14;

    if($pi == pi()){
        echo "<br>iguais!";
    }else {
        echo "<br>Diferentes";
    }

//operador relacional

$pi_errado = 2.8;
//resposta
echo '<br>' . ($pi - pi());
echo '<br>' . ($pi - $pi_errado);

