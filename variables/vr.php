<div class="title">Valor x Referência</div>

<?php 


$a = 'valor inicial';

echo $a; 
echo "<br>";


// atribuicao por valor
echo $aValor = $a ;
echo "<br>";
echo $aValor;
echo "<br>";
$aValor = 'Outro Valor';
echo "<br>";
echo $a;
echo "<br>";
echo $aValor;



//atribuicao por referencia

$variableReferencia = &$a;
$variableReferencia = 'mesma referencia';
echo "<br>";
echo $a; 
echo "<br>";
echo $variableReferencia;











?>