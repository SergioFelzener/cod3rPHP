<div class="title">Mapa Array</div>

<?php 

// array com map - chave e valor

$dados = array(
    "idade" => 25,
    "cor" => "verde",
    "peso" => 49.8
); 

print_r($dados);

echo "<br>"; 

var_dump($dados['idade']);
echo "<br>"; 
var_dump($dados['cor']);
echo "<br>"; 
var_dump($dados['peso']);

echo "<br>"; 
$lista = [
    "a", 
    "cinco" => "b", 
    "c", 
    8 => "d", 
    "e", 
    6 => "f", 
    "g",
    8 => "h",
     
];

print_r($lista);
echo "<br>"; 
// adicionando ao array 
$lista[] = "i"; 
echo "<br>"; 

print_r($lista);

echo "<br>"; 

$lista['vinte'] =  "j"; 
echo "<br>"; 

print_r($lista);

$lista[false] =  "tentei indexar como false";  
echo "<br>"; 

print_r($lista);

// aqui são testes não fazem sentido, so para manipulaçõ do array de diversas formas..









?>