<div class="title">Array's Basico</div>

<?php 

$lista = array(1, 2, 3.4, "texto");

echo $lista . '<br>';

var_dump($lista); 

echo '<br>'; 

print_r($lista);

$lista[0] = 1234;
print_r($lista);

echo '<br>' . $lista[0];
echo '<br>' . $lista[1];
echo '<br>' . $lista[2];
echo '<br>' . $lista[3];


var_dump($lista[4]);

$texto = "Texto de teste"; 
echo '<br>' . $texto[0];
echo '<br>' . $texto[2];
echo '<br>' . $texto[11]; // cuidado ao acessar esse indice de um array 
echo '<br>' . mb_substr($texto, 10, 1);









?>