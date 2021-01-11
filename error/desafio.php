<div class="title">Desafio com Namespace(usando funçAo com mesmo nome da API do PHP</div>

<?php 

// include_once('desafio_arquivo'); // 
include_once 'desafio_arquivo.php';  // pode escrever igual echo 

use function \Aritimetica\intdiv;

try { 
    echo intdiv(8, 3) .'<br>';
} catch (\Aritimetica\NaoInteiroException $e) { 
    echo 'Não é um numero inteiro <br>'; 
}

try { 
    echo intdiv(8, 0) .'<br>';
} catch (DivisionByZeroError $e) { 
    echo 'Não divisível por 0 <br>'; 
}

echo intdiv(8, 2) . '<br>'; 
echo \intdiv(8, 2) . '<br>'; 
echo \intdiv(8, 3) . '<br>'; 









?>