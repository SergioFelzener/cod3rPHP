<?php

echo 'Carregando include_once_arquivo';


$variavel = 'Estou definida';


if (!function_exists('soma')) {
    function soma($a, $b) {
        return $a + $b;
    }
}