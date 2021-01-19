<div class="title">Escrevendo Arquivo</div>


<?php 

$arquivo = fopen('teste.txt', 'w'); // "w" write escrever arquivo
fwrite($arquivo, "Valor inicial2\n"); // quebrando linha com o \n ; 

$str = "Segunda Linha";
fwrite($arquivo, $str);

fclose($arquivo);


$arquivo = fopen('teste.txt', 'w');
fwrite($arquivo, "Novo Conteúdo\n");
fclose($arquivo);

$arquivo = fopen('teste.txt', 'a'); // append acrescentar novas linhas "a";
fwrite($arquivo, "com novos valores\n");
fwrite($arquivo, "Adicionado em segundo momento\n");
fclose($arquivo);


$arquivo = fopen('teste.txt', 'x'); // "x" arquivo tem que ser um arquivo novo, nao pode ser em um arquivo que já existe da erro no php 









