<div class="title">Argumento Padrão</div>

<?php 


function saudacao($nome = 'Senhor(a)', $sobrenome = 'Cliente') {
    return "bem vindo {$nome} ${sobrenome}! <br>"; 
}

echo saudacao();
echo saudacao(NULL);
echo saudacao(NULL, NULL);
echo saudacao('Mestre', 'Supremo');


function anotarPedido($comida, $bebida = 'Água') { 
    echo "Para comer: {$comida} <br>";
    echo "Para beber: {$bebida} <br>";
}

anotarPedido('Hamburguer');
anotarPedido('pizza', 'Refri');

function anotarPedido2($bebida = 'Água', $comida ) { 
    echo "Para comer: {$comida} <br>";
    echo "Para beber: {$bebida} <br>";
}

// anotarPedido2('Hamburguer'); // necessita do 2 parametro sendo que é obrigatorio

anotarPedido2('Suco', 'Massa'); 







?>

