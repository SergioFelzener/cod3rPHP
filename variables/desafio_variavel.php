<div class="title">Desafio Equação</div>

<img style="height:250px;" src="./assets/img/equacao.png" alt="imagem desafio">

<?php 
echo "<br>"; 
echo "<br>"; 
echo "<br>"; 

$cont01 = 6 * (3 + 2);
$cont02 = $cont01 ** 2; 
$div01 = 3 * 2; 

$parcial1 = $cont02 / $div01;

$cont03 = (1 - 5) * (2 - 7) / 2;
$parcial2 = $cont03 ** 2; 

$dividendoMaster = ($parcial1 - $parcial2) ** 3;

$divisorMaster = 10 ** 3;

$resultado = ($dividendoMaster / $divisorMaster); 


echo "Resultado da equação = " . ($resultado); 







?>