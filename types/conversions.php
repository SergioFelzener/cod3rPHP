<div class="title">Conversões em PHP</div>

<?php 

// primeiramente sempre tentar de fugiur de conversoes estranhas

echo is_int(PHP_INT_MAX);

//int para float
echo "<br>";
var_dump(PHP_INT_MAX + 1);
echo "<br>";
var_dump(1 + 1.0); // int mais float resultado float
echo "<br>";
var_dump((float) 3); // casting fazendo conversão explicita - estamos dizendo que queremos convertes o 3(int) em float 
echo "<p>Float para Int";
var_dump((int) 6.8);
echo "<br>";
var_dump(intval(2.8)); 
echo "<br>";
var_dump((int) round(2.8)); 
var_dump(round(2.8)); // sem o casting arrendonda para float 
echo "<br>";

// operações com strings

echo "<p>Operações com Strings</p>";
echo "<br>";

var_dump(3 + "2"); // PHP soma
echo "<br>";
var_dump("3" + 2);
echo "<br>";
var_dump("3" . 2);
echo "<br>";

echo '<br>' . is_string("3" . 2); 
echo '<br>' . is_string("3" + 2);
// var_dump(1 + "cinco");  // comentado pois da warning 

echo "<br>";
// cenários estranhos 
// var_dump(1 + "5 cinco"); // soma os numeros e da warning pois final esta  escrito cinco 

echo "<br>";
var_dump(3 + "4.5");
echo "<br>";
var_dump(3 + "-32e2");
echo "<br>";
var_dump((int)  "4.5");
echo "<br>";
var_dump((float) "4.5");


?>