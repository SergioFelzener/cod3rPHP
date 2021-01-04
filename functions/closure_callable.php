<div class="title">Closure & Callable</div>


<?php 


$soma1 = function ($a, $b) { 
    return $a + $b;
};

function soma2($a, $b) { 
    return $a + $b;
}

echo $soma1(2, 3) . '<br>';
echo is_callable($soma1) ? 'sim' : 'não' . '<br>';
echo "<br>";
// $soma1 = 1;
echo is_callable($soma1) ? 'sim' : 'não' . '<br>';
echo "<br>";
echo soma2(2, 3) . ' ';
echo (is_callable('soma2') ? 'sim' : 'não') . '<br>';

var_dump($soma1);

var_dump('soma2');








?>