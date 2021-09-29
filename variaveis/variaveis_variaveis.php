<div class="titulo">Variáveis Variáveis</div>

<?php
    $a = 'valorA';
    $$a = 'valorAA';
    echo "$a {$$a} ${$a} $valorA"; //precisa das chaves para utilizar interpolação de variaveis variaveis
    echo '<br>';
    $epa = 'opa';
    $opa = 'vish';
    $vish = 'eita!!!';
    echo "$epa {$$epa}";
?>