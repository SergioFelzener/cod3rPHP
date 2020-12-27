<div class="title">Operador Ternário</div>

<?php 

$idade = 70; 
$status;

if ($idade >= 18) { 
    $status = "Maior de Idade";
} else { 
    $status = "menor de idade"; 
}


echo "$status<br>";

$idade = 17;
$status = $idade >= 18 ? 'Maior de idade' : 'Menor de idade'; // operador ternario caso seja verdadeiro entre na 1 opcao apos o ? .

echo "$status<br>";

$idade = 75;
$status = $idade >= 18 ? ($idade >= 65 ? 'Aposentado' : 'Maior de Idade') : 'Menor de idade'; 

echo "$status<br>";



?>