<div class="title">Desafio FOR</div>

<!--
    
fazer um laço que imprima como está abaixo:

#
##
###
####
##### 

1) Pode usar incremento
2) Não pode usar incremento
-->

<?php

$impressao = "";

echo "1)resposta" .  '<br>';

for ($i = 0; $i <= 4; $i++) {
    $impressao .= '#'; // atribuir concatenando dentro de impressao.
    echo "{$impressao} <br>";
}

echo '<br>' . '<hr>';

echo "2)resposta" .  '<br>';

for ($impressao2 = '#'; $impressao2 !== '######'; $impressao2 .= '#') {
    echo "{$impressao2}<br>";
}

?>