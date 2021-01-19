<div class="title">Datas #02</div>

<?php 

$formatoData1 = 'D, d \d\e M \d\e Y'; 
$formatoData2 = '%A, %d de %B de %Y';
$formatoDataHora = '%A. %d de %B de %Y - %H:%M:%S'; 


$agora = new DateTime();

print_r($agora);
echo "<br>";
echo '<hr>';


echo $agora->format($formatoData1) . '<br>';

setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8');
echo strftime($formatoData2, $agora->getTimestamp()) . '<br>';

$dataFixa = new DateTime('1978-01-31 15:09:22');
echo strftime($formatoDataHora, $dataFixa->getTimestamp()) . '<br>';

$amanha = new DateTime('-2 day');
echo strftime($formatoData2, $amanha->getTimestamp()) . '<br>'; 

$amanha->modify('+1 day');
echo strftime($formatoDataHora, $amanha->getTimestamp()) . '<br>'; 

$amanha->setDate(2000, 12, 31);
echo strftime($formatoDataHora, $amanha->getTimestamp()) . '<br>'; 


$dataPassada = new DateTime('2000-05-17');
$dataFutura = new DateTime('2030-11-26');
$outraDataFutura = new DateTime('2030-11-26');


echo ($amanha > $dataPassada ? 'Maior' : 'Menor') . '<br>'; 
echo ($amanha->getTimestamp() > $dataPassada->getTimestamp() ? 'Maior' : 'Menor') . '<br>'; 

echo ($amanha > $dataFutura ? 'Maior' : 'Menor') . '<br>';

echo $outraDataFutura === $dataFutura ? 'Igual' : 'Diferente' . '<br>';

echo '<br>';

//definindo timezone no PHP 
$timeZone = new DateTimeZone('America/Sao_Paulo');
$agora = new DateTime(null, $timeZone);

echo $agora->format('d/M/Y H:i:s');















?>