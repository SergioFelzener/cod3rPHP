<div class="title">Lendo Arquivos</div>


<?php 

$arquivo = fopen('teste.txt', 'r');
echo fread($arquivo, 10);

echo "<br>"; 

echo fread($arquivo, 10);
fclose($arquivo);

echo "<hr>";

$arquivo = fopen('teste.txt', 'r'); 
$tamanho = filesize('teste.txt'); // verificando o tamanho do arquivo 

echo "tamanho do arquivo = {$tamanho}, Bytes", '<br>';

echo fread($arquivo, $tamanho); //passando tamanho do arquivo com o real tamanho na variavel $tamanho resultado le o arquivo todo  
fclose($arquivo);

echo "<br>";
echo "<hr>";

$arquivo = fopen('teste.txt', 'r'); 
echo fgets($arquivo), '<br>';
echo fgets($arquivo), '<br>';
echo fgets($arquivo), '<br>';
var_dump(fgets($arquivo));
echo '<br>';
fclose($arquivo);

echo "<hr>";

$arquivo = fopen('teste.txt', 'r');
while(!feof($arquivo)) { 
    echo fgets($arquivo), '<br>';
}
fclose($arquivo);


echo "<hr>";

$arquivo = fopen('teste.txt', 'r');
while(!feof($arquivo)) { 
    echo fgetc($arquivo), '<br>';
}
fclose($arquivo);

echo "<hr>";

$arquivo = fopen('teste.txt', 'r+'); // lendo arquivo e alterando arquivo 
echo fgets($arquivo), '<br>';
echo fgets($arquivo), '<br>';
echo fgets($arquivo), '<br>';
echo fgets($arquivo), '<br>';
fwrite($arquivo, "Conteúdo adicionado durante a leitura");
fclose($arquivo);

echo "FIM !!!";





?>