<div class="title">Tipo Booleanos</div>

<?php 


echo TRUE; 
echo '<br>'; 
echo FALSE; 

echo '<br>' . var_dump(TRUE); 
echo '<br>' . var_dump(FALSE); 
echo '<br>' . var_dump('false'); // string
echo '<br>' . is_bool(FALSE); // saber se valor é booleano
echo '<br>' . is_bool('true'); 


// fazer regras de conversão
echo "<p>Regras:</p>"; 
echo '<br>' . var_dump((bool) 0); // apenas 0 vai ser convertido para falso 
echo '<br>' . var_dump((bool) 20); // qualquer outro convertido vai ser true  
echo '<br>' . var_dump((bool) -1); // mesmo negativos vai ser true 
echo '<br>' . var_dump((bool) 0.0); // mesmo negativos vai ser true 
echo '<br>' . var_dump((bool) 0.0000001); // mesmo negativos vai ser true 
echo '<br>' . var_dump((bool) ""); // string vazia falso
echo '<br>' . var_dump((bool) " "); // string com qq valor true
echo '<br>' . var_dump((bool) "0"); // false
echo '<br>' . var_dump((bool) "00"); // string com qq valor true
echo '<br>' . var_dump((bool) "false"); // string com qq valor true
echo '<br>' . var_dump(!!"false"); // sem bool saber se resolve para V ou F 




?>