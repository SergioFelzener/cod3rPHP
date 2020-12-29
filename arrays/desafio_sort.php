<div class="title">Desafio Sorteio</div>

<?php 

$nomes = ["Elza", "Cinderella", "Branca de Neve", "Rapunzel"];

$sorteio = array_rand($nomes);

echo "$sorteio = $nomes[$sorteio]"; 
echo "<br>";
echo "<br>";
echo "Nome Sorteado foi :  {$nomes[$sorteio]}"; 




?>