<div class="title">Operadores Relacionais</div>

<?php 

var_dump(1 == 1); 
var_dump(1 > 1); 
var_dump(1 >= 1); 
var_dump(1 <> 1); 
var_dump(1 != 1); 
var_dump(1 <= 1); 
var_dump(1 > 1); 
echo "<br>"; 
var_dump(1 == '1'); 
var_dump(111 == '111'); 
var_dump(111 === '111'); 
var_dump(111 != '111'); 
var_dump(111 !== '111'); 
echo "<br>"; 
echo "<hr>"; 
echo "<p> Usando relacionais no IF Else"; 
echo "<br>"; 

$idade = 70 ;

if ($idade < 18 ) { 
    echo "Menor de idade"; 
} else if ($idade <= 65) { 
    echo "Adulto = $idade anos <br>"; 
} else { 
    echo "Terceira idade - $idade <br>"; 
}
echo "<hr>"; 
echo "<br>"; 
echo "<p>SpaceShip</p>";

var_dump(5 <=> 3);
var_dump(50 <=> 50);
var_dump(5 <=> 50);

echo "<p>Valore podem ser verdadeiros ou falso</p>";
var_dump(!!5); // colcar dupla negação para saber se é verdadeiro ou falso
var_dump(!!0);
var_dump(!!"");
var_dump(!!" ");

?>
