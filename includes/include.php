<div class="title">Include</div>

<?php 


echo 'Executei essa linha do arquivo include<br>';

include('includes_arquivo.php');
// include('includes_arquivo.php'); // nao pode repetir o mesmo include 

echo soma(3, 8) . '<br>';
echo "o conteudo da variável é : '{$variavel}'.";




?>