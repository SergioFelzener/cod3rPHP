<div class="title">Desafio FOR</div>

<!--
    
Desafido Impressão na tela com laço de repetição
Fazer um laço que imprima como está abaixo:

#
##
###
####
##### 

Deverá conter 2 respostas:

1) Pode usar incremento
2) Não pode usar incremento
-->

<?php


//Utilizando incremento
$impressao = "";

echo "1)resposta" .  '<br>';

for ($i = 0; $i <= 4; $i++) {
    $impressao .= '#'; // atribuir concatenando dentro de impressao.
    echo "{$impressao} <br>";
}

echo '<br>' . '<hr>';


//sem utilizar incremento
echo "2)resposta" .  '<br>';

for ($impressao2 = '#'; $impressao2 !== '######'; $impressao2 .= '#') {
    echo "{$impressao2}<br>";
}

?>