<div class="title">Argumentos e Retornos</div>


<?php 


function obterMsg() { 

    return 'Seja Bem Vindo(a)';
}

echo obterMsg() . '<br>'; // tem que usar o echo para mostrar o retorno 
//ou atribuir a função a uma variável 

$msg = obterMsg();

echo "{$msg}<br>";
echo '<br>' . obterMsg() . '<br>';
var_dump(obterMsg());


function obterMsgComNome($nome) { 
    return "Bem vindo, {$nome} !";
}

echo '<br>', obterMsgComNome('Wagner');
echo '<br>', obterMsgComNome('Sergio');


function soma($a ,$b) {
    return $a + $b;
}


$x = 4;
$y = 5;
echo '<br>', soma(10, 20);
echo '<br>', soma(3, 41);
echo '<br>', soma($x, $y);

function trocaValor ($a, $novoValor) { 
    $a = $novoValor; 

}

$var = 1; 

trocaValor($var, 3);

echo '<br>', $var;

function trocaValorDeVerdade(&$a, $novoValor) {
    $a = $novoValor;


}

trocaValorDeVerdade($var, 500);
echo '<br>', $var;







?>