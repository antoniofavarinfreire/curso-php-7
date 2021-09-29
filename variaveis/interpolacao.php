<div class="titulo">Interpolação</div>

<?php
    //Na interpolação, não pode ser feito operações matematicas
    $numero = 10;
    $objetos = caneta;
    echo $numero;
    echo '<br> $numero'; //Não interpola ''. Interpola ""
    echo "<br> $numero";
    echo '<br>';
    echo "O resultado fina é: $numero";

    $objeto = 'caneta';
    echo "<br> Eu tenho 5 $objetos";
    echo "<br> Eu tenho 5 {$objetos}s.";
    echo "<br> Eu tenho 5 {$objetos}s perdi 3 {$objetos}s";