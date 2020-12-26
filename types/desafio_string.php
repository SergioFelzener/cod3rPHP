<div class="title">String Desafio</div>

<?php 

// Avaliando os métodos na documentação da string qual 
// método vai pegar na string abaixo retorne 1?
// !AbcaBcabc

$str = "!AbcaBcabc";


// resolvi dessa forma retornando 1 mas está errado 
// print_r(str_word_count($str, 1));

// echo str_word_count($str);

// forma correta 

echo strpos($str, 'abc') . '<br>'; 
echo stripos($str, 'abc') . '<br>'; 
echo strpos(strtolower($str), 'abc');


?>