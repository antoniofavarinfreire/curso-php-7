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

if($pi - pi()){
    echo '<br>Praticamente iguais!';
}

if($pi - $pi_errado <= 0.01){
    echo '<br>praticamente iguais!';
} else {
    echo '<br>Valor errado!';
}
