<div class="titulo">Desfio Operadores logicos</div>
<!--
    Dois trabalhos -> Treça quinta
    - Caso dois sejam executados -> TV 50' e Sorvete
    - Caso sómente um deleste seja executado -> TV 32" e Sorvete
    - Caso nenhum -> Fica em casa
-->
<form action="#" method="post">
    <div>
        <label for="t1">Trabalho 1 (Treça): </label>
        <select name="t1" id="t1">
            <option value="1">Executado</option>
            <option value="0">Não executado</option>
        </select>

    </div>

    <div>
        <label for="t2">Trabalho 2 (Quinta): </label>
        <select name="t2" id="t2">
            <option value="1">Executado</option>
            <option value="0">Não executado</option>
        </select>

    </div>
    <button>Executar</button>
</form>

<style>
    button, select {
        font-size: 1.8rem;
    }
</style>

<?php
$terca = $_POST['t1'];
$quinta = $_POST['t2'];

//  echo $terca;
//  echo $quinta;

// if(($terca == 1) && ($quinta == 1)){
//     echo("Comprar Tv 50 e Tomar sorvete");
// }else if(($terca == 1) && ($quinta == 0)){
//     echo("Comprar Tv 32 e Tomar sorvete");
// }else if(($terca == 0) && ($quinta == 1)){
//     echo("Comprar Tv 32 e Tomar sorvete");
// }else if(($terca == 0) && ($quinta == 0)){
//     echo "ficar em casa";
// }
if(isset($_POST['t1']) && isset($_POST['t2'])){
    $t1 = $_POST['t1'] === '1';
    $t2 = !!$_POST['t2'];
    $tv = '';
    $sorvete = false;

    if($t1 and $t2){
        $tv = "50";
    }

    //Utilizando ou exclusivo, pois basta uma situação que não satisfaça.
    if($t1 xor $t2){
        $tv = "32";
    }

    if($t1 or $t2){
        $sorvete = true;
    }

    if($tv){
        $resultado = "vamos comprar uma televisão $tv";
    }else {
        $resultado = "Sem Tv dessa vez";
    }
    $saldavel = !$sorvete;

    if($saldavel){
        $resultado .= '<br> Estamos mais saldaveis';
    }else {
        $resultado .= '<br> Sorvete liberado';
    }

    echo "<p>$resultado</p>";
}


