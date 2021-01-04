<div class="title">Desafio Palindromo(Palavras lidas de traz para frente são iguais)</div>

<?php 

function palindromo($palavra) { 

    $ultimoIndice = strlen($palavra) - 1;

    for ($i = 0; $i <= $ultimoIndice; $i++) { 
        if($palavra[$i] !== $palavra[$ultimoIndice - $i]) { 
            return "Não";
        }

        

    }
    return "SIM";
}

echo palindromo('arara') . '<br>';
echo palindromo('bola') . '<br>';
echo palindromo('ana') . '<br>';
echo palindromo('subinoonibus') . '<br>';


function palindromoSimples($palavra) { 
    return $palavra === strrev($palavra) ? 'SIM' : 'Não'; 
}

echo palindromoSimples('arara') . '<br>';
echo palindromoSimples('bola') . '<br>';
echo palindromoSimples('ana') . '<br>';
echo palindromoSimples('subinoonibus') . '<br>';



?>