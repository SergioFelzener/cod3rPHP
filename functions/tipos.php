<div class="title">Tipos</div>

<?php 


function somar1($a, $b) { 
    echo "<span> Somando $a + $b = </span>";
    return $a + $b;

}

echo somar1(1, 2) . '<br>';
echo somar1(1.7, 2.5) . '<br>';
// echo somar1(1, '4dois') . '<br>'; // soma pegando o 1 indice da string 


function somar2(int $a, int $b) { 
    echo "<span> Somando $a + $b = </span>";
    return $a + $b;
}

echo somar2(1, 2) . '<br>';
echo somar2(1.7, 2.5) . '<br>';
// echo somar2(1, '4dois') . '<br>'; // soma pegando o 1 indice da string 

function somar3($a, $b): int { 
    echo "<span> Somando $a + $b = </span>";
    return $a + $b;
}

echo somar3(1, 2) . '<br>';
echo somar3(1.7, 2.5) . '<br>';
// echo somar3(1, '4dois') . '<br>'; // soma pegando o 1 indice da string 


?>