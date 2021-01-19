<div class="title">API do PHP (DATA)</div>


<?php 

// Usando documentação do PHP para formatar data

echo time() . '<br>';  // retorna quantidade de segundos desde o marco 0 01/01/1970

echo date('D, d, \d\e M \d\e Y H:i A') . '<br>'; // formatando data

echo strftime('%A, %d de %B de %Y', time()) . '<br>';

setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8');

echo strftime('%A, %d de %B de %Y', time()) . '<br>';

$amanha = time() + (24 * 60 * 60); // sabendo a data de amanha
echo strftime('%A, %d de %B de %Y', $amanha) . '<br>';

$umaSemana = time() + ((24 * 60 * 60) *7); // fazendo uma semana x 7 
echo strftime('%A, %d de %B de %Y', $umaSemana) . '<br>';

//forma mais simples de ver uma semana 
$proximaSemana = strtotime('+1 week');
echo strftime('%A, %d de %B de %Y', $proximaSemana) . '<br>';

// construir a data passando uma data fixa
$dataFixa = mktime(22, 20, 33, 1, 31, 1978);
echo strftime('%A, %d de %B de %Y - %H:%M:%S', $dataFixa);





?>