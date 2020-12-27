<div class="title">Interpolação</div>

<?php 

$numero = 10; 
echo $numero; 
echo '<br> $numero'; // aspas simples não interpola
echo "<br> $numero"; 
echo "<br> $numero + 1"; 


$texto = "Sua nota é : $numero"; 
echo "<br>$texto"; 


$objeto = "caneta"; 
// echo "<br> eu tenho $objetos"; 
echo "<br> eu tenho {$objeto}s.";
echo "<br> eu tinha { $objeto}s mas perdi 3 {$objeto }s."; // cuidado com os espaços entre as chaves
echo "<br>";
echo "$numero";










?>