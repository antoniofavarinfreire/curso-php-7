<div class="titulo">Desafio Switch</div>
<!--Conversor para milha-->
<form action="#" method="post">
    <input type="text" name="param">
    <select name="convercao" id="convercao">
        <option value="km-milha">km -> milha</option>
        <option value="milha-km">Milha -> Km</option>
        <option value="metro-km">Metro -> km</option>
        <option value="km-metro">Km -> Metro</option>
    </select>
    <button>Calcular</button>
</form>
<style>
    from > * {
        font-size: 1.8rem;
    }
</style>
<?php

// echo $_POST['param'] . '<br>';
// echo $_POST['convercao'];
const FATOR_KM_MILHA = 0.631301;
const FATOR_METRO_KM = 100;

$param = $_POST['param'] ?? 0;

switch ($_POST['convercao']) {
    case 'km-milha':
        $distancia = $param * FATOR_KM_MILHA;
        $mensagem = "$param Km = $distancia Milhas";
        break;
    case 'milha-km':
        $distancia = $param / FATOR_KM_MILHA;
        $mensagem = "$param Milhas = $distancia Km";
        break;
    case 'metro-km':
        $distancia = $param / FATOR_METRO_KM;
        $mensagem = "$param Metros = $distancia Km";
        break;
    case 'km-metro':
        $distancia = $param * FATOR_METRO_KM;
        $mensagem = "$param Km = $distancia Metros";
        break;
    default:
        $mensagem ="Nenhum valor calculado";
        break;
}

echo "<p>$mensagem</p>";