<div class="title">Strings PHP</div>

<?php 

echo ("eu sou uma string") . ('<br>'); 
var_dump("eu também"); // calcula o acento string(10);
echo "<br>";

// concatenação " . " ; // ja estava usando antes desse ponto do curso.

echo "String" . " Concatenação";
echo "<br>";

echo "Tambem aceito", " caso echo"; 
echo "<br>";

echo "\n"; 

echo "'Teste'" . "\n" . '<br>' . ' "Teste" ' . "\n" . '<br>' . '\'Teste\' ' . "\n" . '<br>' . "\"Teste\" " . "\n" . '<br>' . "\\" . "\n" .'<br>'; 

print("<br> Existe o método PRINT"); 

echo '<br>' . strtoupper('maximixado'); // TUDO MAXIMIZADO
echo '<br>' . strtolower("MINIMIZADO"); // TUDO MINIMIZADO
echo '<br>' . ucfirst('só a primeira letra');
echo '<br>' . ucwords('todas as palavras');
echo '<br>' . strlen('Quantas Letras?');
echo '<br>' . strlen('eu também');
echo '<br>' . mb_strlen('eu também', "utf-8"); // nao tem necessidade de passar o encode UTF-8 
echo '<br>' . substr('Só uma parte mesmo', 7, 6); // caso nao coloque o segundo parametro vai pegar ate o final
echo '<br>' . str_replace('isso', 'aquilo', 'Trocar isso isso'); // 1-palavra que vai ser trocada, 2- trocar por, 3 - onde trocar.
 



 


?>