<div class="title">Operações</div>

<?php 


$dados1 = [
    "nome" => "José",
    "idade" => 28

];

$dados2 = [

    "naturalidade" => "Brasileiro"
];

$dados2 = ['endereço' => 'rua A'];

$dadosCompletos = $dados1 + $dados2;

print_r($dadosCompletos);


echo '<br>' . is_array($dadosCompletos); // verificar se a variavel representa ou nao um array
echo '<br>' . count($dadosCompletos); // contando indices do array

echo '<br>';
$indice = array_rand($dadosCompletos);
echo "$indice = $dadosCompletos[$indice]"; 
echo '<br>'; 
echo "{$dadosCompletos['idade']}";
echo " ${dadosCompletos['idade']}";

unset($dadosCompletos["nome"]); // removendo elementos do array 
echo '<br>';
print_r($dadosCompletos);
echo '<br>';

unset($dadosCompletos);
echo '<br>';
var_dump($dadosCompletos);


$impares = [1, 3, 5, 7, 9];
$pares = [0, 2, 4, 6, 8]; 

$decimais = $pares + $impares; // da preferencia para o da esquerda
echo "<br>";
print_r($decimais);

$decimais = array_merge($pares, $impares);
echo "<br>";
print_r($decimais);

sort($decimais);
echo "<br>";
print_r($decimais);








?>