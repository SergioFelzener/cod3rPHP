<div class="title">Variáveis Variáveis</div>


<?php 

$a = 'ValorA';
$$a = 'ValorAA';

echo "$a, outro valor {$$a}, testando ${$a} e mais $ValorA";

echo "<br>";
$epa = 'opa';
$opa = 'vish';
$vish = 'eita!!!!';

echo "$epa, {$$epa}, {$$$epa}";

?>