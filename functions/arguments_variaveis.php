<div class="title">Argumentos Variáveis</div>

<?php


function soma($a, $b)
{
    return $a + $b;
}

echo soma(4, 5) . '<br>';
echo soma(5, 5, 2) . '<br>';  // como a função recebe 2 parametros o restante é desconsiderado neste caso.


function somaCompleta(...$numeros) {
    // print_r($numeros);
    $soma = 0;
    foreach ($numeros as $num) {
        $soma += $num;
    }
    return $soma;
}

echo somaCompleta(1, 2, 3, 100);

$array = [6, 7, 8];
echo '<br>' . somaCompleta(...$array);


function membros($titular, ...$dependentes) { 
    echo "Titular: {$titular} <br>";
    if($dependentes) { 
        foreach($dependentes as $dep) { 
            echo "Dependentes: {$dep} <br>";
        }
    }
}

echo "<br>";
membros("Ana Silva", "Pedro", "Rafaela", "José");
echo "<br>";
membros("Roberto", "Andre");









?>