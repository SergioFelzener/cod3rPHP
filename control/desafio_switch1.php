<div class="title">Desafio Switch 01</div>

<form action="#" method="post">
    <div>
        <input type="text" name="param">
        <select name="conversao" id="conversao">
            <option value="km-milhas">KM → Milhas</option>
            <option value="milhas-km">Milhas → KM</option>
            <option value="metros-km">Metros → KM</option>
            <option value="km-metros">KM → Metros</option>
            <option value="f-celsius">Fahrenheit → Celsius</option>
            <option value="celsius-f">Celsius → Fahrenheit</option>
        </select>
    </div>
    <button>Calcular</button>
    <input type="submit" value="executar">
</form>

<style>
    form>* {
        font-size: 1.8rem;
    }
    button { 
        margin-top: 8px;
    }
</style>

<?php

// echo $_POST['param'] . "<br>";
// echo $_POST['conversao'];
const FATOR_DIVISAO_MULTIPLICACAO_GRAUS = 1.8;
const VALOR_CONVERSAO_GRAUS = 32;


if (isset($_POST['param']) && isset($_POST['conversao'])) {

    $conversao = $_POST['conversao'];
    $valor = $_POST['param'];
    $milha = 1.60934;
    $resultado = 0;
    $metro = 1000;
    $soma = 32; 



    switch ($conversao) {
        case 'km-milhas':
            $resultado = $valor / $milha;
            $msg = "$valor Km = $resultado Milhas";
            break;
        case 'milhas-km':
            $resultado = $valor * $milha;
            $msg = "$valor Milhas = $resultado KM";
            break;
        case 'km-metros':
            $resultado = $valor * $metro;
            $msg = "$valor KM = $resultado Metros";
            break;
        case 'metros-km':
            $resultado = $valor / $metro;
            $msg = "$valor Metros = $resultado KM";
            break;
        case 'f-celsius':
            $resultado = ($valor - VALOR_CONVERSAO_GRAUS) / FATOR_DIVISAO_MULTIPLICACAO_GRAUS;
            $msg = "{$valor}˚ Fahrenheit = " . number_format($resultado, 2, '.', '') ."˚ Celsius";
            break;
        case 'celsius-f':
            $resultado = $valor * FATOR_DIVISAO_MULTIPLICACAO_GRAUS + VALOR_CONVERSAO_GRAUS;
            $msg = "{$valor}˚ Celsius = " . number_format($resultado, 2, '.', '') ."˚ Fahrenheit ";
            break;
        default:
            $msg = "***SEM VALOR***";
    }

    echo "<p>Resultado da conversão de $msg";
}



?>