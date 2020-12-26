<div class="title">Operações Aritiméticas usando INT & FLOAT</div>


<?php 

echo 1 + 1; 
echo "\n"; // pulando linha no terminal 
echo '<br>'; // pulando linha no Browser 
var_dump(1 + 1); // verificando tipo no caso INT // var_dump pula linha no console ;=)
echo "\n";
echo '<br>';
var_dump(1 + 1.0); // neste caso o float prevalece tornando float();.
echo '<br>';

echo 1 + 2.5, '<br>';
echo 10 - 2, '<br>';
echo 2 * 5, '<br>'; 
echo 7 / 4, '<br>';

echo intdiv(7, 4), '<br>'; // tira as casas decimais 
echo round(7 / 4), '<br>'; // arrendonda para valor mais proximo 
echo 7 % 4, '<br>'; // verificando resto da divisão
echo 7 % 2, '<br>'; // verificando se é par ou impar caso resto > 0 , impar 
echo 8 % 2, '<br>'; // verificando se é par ou impar caso resto === 0 , par 
// echo 7 / 0, '<br>'; // retorna INF infinito // no PHP da um WARNING caso esteja ativado 
// echo intdiv(7, 0), '<br>'; // #ERRO > codigo para execução
echo 4 ** 2, '<br>'; // ** elevado 4 elevado a 2 = 16


// Precedencia dos operadores
// () => ** => / * % => + - assim como na matemática 

echo "<p>Precedência</p>"; 

echo 2 + 3 * 4, '<br>'; 
echo (2 + 3) * 4, '<br>'; 
echo 2 + 3 * 4 ** 2, '<br>'; 
echo ((2 + 3) * 4) ** 2, '<br>'; 




















?>