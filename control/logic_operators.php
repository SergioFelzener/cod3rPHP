<div class="title">Operadores Lógicos</div>

<?php 

var_dump(true);
echo '<br>' . " ";
var_dump(!true); // negação
echo '<br>' . " ";
var_dump(!!true); // dupla negação

echo "<hr>"; 

echo "<br> <p> Tabela Verdade do 'AND' (E)</p>";  // caso tenha um falso, resultado é falso.

var_dump(true && true); 
var_dump(true && false); 
var_dump(false && true); 
var_dump(false && false); 
echo '<br>' . " ";

// mesma forma
var_dump(true and true); 
var_dump(true and false); 
var_dump(false and true); 
var_dump(false and false); 
echo '<br>' . " ";

echo "<hr>";  

echo "<br> <p> Tabela Verdade do 'OR' (OU)</p>"; 

var_dump(true || true); 
var_dump(true || false); 
var_dump(false || true); 
var_dump(false || false);

// mesma forma
var_dump(true or true); 
var_dump(true or false); 
var_dump(false or true); 
var_dump(false or false);

echo '<br>' . " ";

echo "<hr>";  

echo "<br> <p> Tabela Verdade do 'XOR' (OU exclusivo)</p>"; 

var_dump(true xor true); 
var_dump(true xor false); 
var_dump(false xor true); 
var_dump(false xor false);

//mesma forma

var_dump(true != true); 
var_dump(true != false); 
var_dump(false != true); 
var_dump(false != false);


echo "<hr>";

echo "<br> <p>Exemplo</p>"; 

$idade = 62;
$sexo = 'F'; 

$pagouPrevidencia = true; 

$criterioHomem = ($idade >= 65 && $sexo === 'M');
$criterioMulher = ($idade >= 60 && $sexo === 'F');
$atingiuCriterio = $criterioHomem || $criterioMulher;
$podeAposentar = $pagouPrevidencia && $atingiuCriterio;
echo "Pode Aposentar -> $podeAposentar" . "<br>";


if (($idade >= 60) && ($sexo === 'F')) { 
    echo "pode aposentar -> $sexo";
    
}else if ($idade >= 65 && $sexo === 'M') { 
    echo "Pode aposentar -> $sexo"; 
} else { 
    echo "Vai Trabalhar mais um Pouco";

}











?>