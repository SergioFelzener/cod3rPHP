<div class="title">Variáveis</div>


<?php 


$numeroA = 13; 

echo $numeroA, '<br>';
var_dump($numeroA);

echo "<br>";
$a = 3;
$b = 16; 

$soma = $a + $b; 
echo ($soma);

echo "<br>";

isset($soma); // verificar se variavel esta setada

echo "<br>";

unset($soma); // desetar variavel

echo "<br>";

isset($soma);

echo "<br>";

var_dump($soma); // resposta NULL pois foi unset e da notice de variavel nao setada
echo "<br>";

$val = 10; 
echo "<br>" . $val;

$val = "Agora sou string"; 
echo "<br>" . $val;


// Nomenclaturas de Variabeis

$var = "valida";
$var2 = "valida"; 
$VAR3 = "valido"; 
// $3m = "invalido"; 


// var predefinidas PHP 

echo "<br>";
var_dump($_SERVER["HTTP_HOST"]);




?>





