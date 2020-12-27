<div class="title">Constantes</div>

<?php


define('TAXA_DE_JUROS', 5.9);

echo TAXA_DE_JUROS; // constantes nao usam o $ 

echo "<br>";

const NOVA_TAXA = 2.5;

echo NOVA_TAXA; 

echo "<br>";

$valorVariavel = 2.8; 

define('NOVA_TAXA2', $valorVariavel);

echo "<br>" . NOVA_TAXA2;

echo '<br>' . PHP_VERSION;
echo '<br>' . PHP_INT_MAX;
echo '<br>' . "Linha : " . __LINE__;
echo '<br>' . "Arquivo : " . __FILE__;
echo '<br>' . "Diretório : " . __DIR__;




?>