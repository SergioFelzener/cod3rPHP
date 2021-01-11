<?php namespace contexto; ?> 
<!-- // deve ser a 1 senteça de cod num arquivo php  -->

<div class="title">Basico Namespace</div>


<?php 

echo __NAMESPACE__ . '<br>';

const CONSTANTE1 = 123;

define('CONSTANTE2', 234);
define('contexto\CONSTANTE2', 234); // definindo namespace

define(__NAMESPACE__ . '\CONSTANTE3', 345);

define('outro_contexto\CONSTANTE4', 456);

echo CONSTANTE1 . '<br>';
echo CONSTANTE2 . '<br>';
// echo \contexto\CONSTANTE3 . '<br>'; // acessar caminho absoluto começando com \
// echo contexto\CONSTANTE3 . '<br>'; // acessar caminho absoluto começando com \

echo constant(__NAMESPACE__ . '\CONSTANTE3');
echo "<br>";

// echo CONSTANTE4 . '<br>';
echo \outro_contexto\CONSTANTE4 . '<br>';


function soma($a, $b) { 
    return $a + $b;
}

echo \contexto\soma(1, 2) . '<br>'; 
echo soma(1, 2) . '<br>'; 

function strpos($str, $text) { 
    echo "Buscando o texto '{$text}' em '{$str}'<br>"; 
    return 1 . '<br>';
}

echo strpos('Texto genérico para busca', 'busca');
echo \strpos('Texto genérico para busca', 'busca');








?>