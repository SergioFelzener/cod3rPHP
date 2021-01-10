<div class="title">Include Once</div>

<?php 

include('include_once_arquivo.php');
// require('include_once_arquivo.php');
echo "<br>";


echo "Variável antes = '{$variavel}'" . '<br>';
$variavel = 'Variável alterada';
echo "Variável depois de ser redeclarada = '{$variavel}' . <br>";

include('include_once_arquivo.php');
echo "<br>";
echo "Variável antes = '{$variavel}'" . '<br>';
$variavel = 'Variável alterada';
echo "Variável depois de ser redeclarada = '{$variavel}' . <br>";

include_once('include_once_arquivo.php');
echo "<br>";
echo "Variável = '{$variavel}'" . '<br>';

require_once('include_once_arquivo.php');
echo "<br>";
echo "Variável = '{$variavel}'" . '<br>';



?>