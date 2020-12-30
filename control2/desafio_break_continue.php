<div class="title">Desafio Impressão com Break & Continue</div>


<?php


$array = [
    "AAA",
    "BBB",
    "CCC",
    "DDD",
    "FFF",
];

$indiceArray = -1;
for ($i = 0; $i < count($array); $i++) {
    if ($i % 2 === 1) continue;
    $indiceArray++;
    echo "$indiceArray => {$array[$i]} <br>";
    $indiceArray++;
}
echo '<br>' . '<hr>';

foreach ($array as $indice => $valor) {
    if ($indice % 2 === 0) {
        echo "$indice => {$valor} <br>";
    }
}







?>