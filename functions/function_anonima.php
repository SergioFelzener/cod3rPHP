<div class="title">Funções Anônimas</div>


<?php 


$soma = function($a, $b) { 
    return $a + $b;
};

echo $soma(1, 2) . '<br>';


function executar($a, $b, $operacao, $funcao) { 
    $resultado = $funcao($a, $b) ?? 'Null';
    echo "valor 1 = {$a}, Operação {$operacao}, valor 2 = {$b} = $resultado<br>";
}

executar(2, 3, '+', $soma);

$multiplicacao = function($a, $b) { 
    return $a * $b;
};

executar(2, 3, '*', $multiplicacao);

function divisao($a, $b) { 
    return $a / $b;
}

// executar(9, 3, '/', divisao);










?>