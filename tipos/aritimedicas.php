<div class="titulo">Operações Aritimedicas</div>

<?php

    echo 1 + 1, '<br>'; //2 
    var_dump (1+1.0);
    echo '<br>';
    echo 1 + 2.5, '<br>';
    echo 10 - 2, '<br>';
    echo 2*5, '<br>';
    echo 7/4, '<br>';
    echo intdiv(7,4), '<br>';
    echo round (7,4), '<br>';
    echo 7%4, '<br>';
    echo 7/0, '<br>';
    // echo intdiv(7,0); //erro!
    echo 4 ** 2, '<br>'; //exponencial
    //() => ** => / * % => + - ordem de precedencia 

    echo '<p>Precêdencia</p>';
    echo 2 + 3 * 4, '<br>';
    echo (2 + 3) * 4, '<br>';
    echo ((2 + 3) * 4) ** 2, '<br>';