<div class="title">Funções e Escopos</div>

<?php 

function printMsg () {

    echo "Olá! "; 
    echo "até a proxima<br>";


}

printMsg();
printMsg();
printMsg();


$var = 1; 

function trocarValor() { 

    $var = 2; // var local so vale dentro da função 
    echo "Durante a função : $var <br>";

}

echo "Antes: $var <br>";
trocarValor(); 
echo "Depois: $var <br>";


function trocarValorDeVerdade() { 
    global $var; // chame a variavel que esta fora do escopo com o GLOBAL e altere ela dentro da função
    $var = 3; 
    echo "Durante a função $var <br>";
}

echo "Antes: $var <br>";
trocarValorDeVerdade(); 
echo "Depois: $var <br>";

var_dump(trocarValorDeVerdade());

?>

