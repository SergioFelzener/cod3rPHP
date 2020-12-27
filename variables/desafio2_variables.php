<div class="title">Desafio Variáveis de Variáveis</div>


<?php 

$a = 'nossa';
$nossa = 'eu';
$eu = 'consegui'; 
$consegui = 'responder';
$responder = 'esse'; 
$esse = 'desafio'; 


echo "nossa! eu consegui responder esse desafio.";

echo "<br>";

echo "{$a}! ${$a} ${$$a} ${$$$a} ${$$$$a} ${$$$$$a}.";

echo "<br>";

echo "{$a}! {$$a} {$$$a} {$$$$a} {$$$$$a} {$$$$$$a}.";





?>