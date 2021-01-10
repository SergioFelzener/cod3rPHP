<div class="title">Função com Include</div>

<?php 

echo 'Carregando : include_function<br>';

function carregarArquivo() { 
    include('includes_arquivo.php');

    echo $variavel . '<br>';
    echo soma(2, 5) . '<br>';

}

echo 'Novamente no arquivo include_function<br>';
// echo soma(1, 8) . '<br>';
carregarArquivo();

// echo "Variável = '{$variavel}' ."; // variável so esta disponivel dentro da função
// var_dump($variavel); // variavel null
echo soma(1, 8) . '<br>'; // chamando metodo soma 



?>
