<div class="title">Desafio Switch 01</div>

<form action="#" method="post">
    <div>
        <input type="text" name="param">
        <select name="conversao" id="conversao">
            <option value="km-milhas">KM to Milhas</option>
            <option value="milhas-km">Milhas to KM</option>
            <option value="metros-km">Metros to KM</option>
            <option value="km-metros">KM to Metros</option>
        </select>
    </div>
    <button>Calcular</button>
    <input type="submit" value="executar">
</form>

<style>
    form>* {
        font-size: 1.8rem;
    }
</style>

<?php

// echo $_POST['param'] . "<br>";
// echo $_POST['conversao'];

if (isset($_POST['param']) && isset($_POST['conversao'])) {

    $conversao = $_POST['conversao'];
    $valor = $_POST['param'];
    $milha = 1.60934;
    $resultado = 0;
    $metro = 1000;


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
        default : 
            $msg = "***SEM VALOR***";
    }

    echo "<p>Resultado da conversão de $msg";
}



?>