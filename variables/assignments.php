<div class="title">Atribuições</div>

<?php 


$title = "Atribuições"; 

$numero = 10; 

echo '<br>' . $numero;
$numero = $numero - 3; 
echo '<br>' . $numero;
$numero = $numero + 1.5; 
echo '<br>' . $numero;
$numero--; // operdor unário de decremento pos fixada
echo '<br>' . $numero;
--$numero; // operador decremento pre fixada
echo '<br>' . $numero;
$numero++; // incremento
++$numero;
echo '<br>' . $numero; 
$numero = 20; 
$numero -= 5; 
echo '<br>' . $numero;
$numero += 5; 
echo '<br>' . $numero;
$numero *= 10;
echo '<br>' . $numero;
$numero /= 2;
echo '<br>' . $numero;
$numero %= 6; 
echo '<br>' . $numero;
$numero **=4; 
echo '<br>' . $numero;


$texto = 'Este é um texto'; 
echo '<br>' . $texto; 
$texto = $texto . ' qualquer'; 
echo '<br>' . $texto; 
$texto .= ' de verdade'; 
echo '<br>' . $texto; 


// valor padrao 

$varInexistente = 'valor inexistente'; 

echo '<br>' . $varInexistente; // comentar essa linha valor recebe laor de baixo valor default
$valor = $varInexistente ?? 'valor default'; // atribuindo um valor padrão.
echo '<br>' . $valor; 












?>