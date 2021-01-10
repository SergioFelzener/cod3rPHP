<div class="title">Include x Require</div>

<?php 

echo 'Usando Include com arquivo inexistente .... <br>';
include ('arquivo_inexistente.php');
echo 'Usando Include com arquivo inexistente .... <br>';

echo '<br>';

echo 'Usando Include com arquivo inexistente .... <br>';
require ('arquivo_inexistente.php');
echo 'Não executou esta linha parou no require .... <br>';


?>