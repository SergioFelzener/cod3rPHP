<div class="title">Error Handler (gerenciador de erros)</div>

<?php 

ini_set('display_errors', 1);  // aqui no caso o php ja esta avisando os warning e errors no meu pc

echo 4 / 0 . '<br>';


error_reporting(E_ERROR);
echo 4 / 0 . '<br>';

error_reporting(E_ALL);
echo 4 / 0 . '<br>';

error_reporting(~E_ALL);
echo 4 / 0 . '<br>';

include 'arquivo_inexistente.php';

echo '<br><hr>';

function filtrarMensagem($errstring) { 
    $text = 'include';
    // $text = 'by zero';
    return !!stripos(" $errstring", $text);

}



set_error_handler('filtrarMensagem', E_WARNING);

echo 4 / 0 . '<br>';
include 'arquivo_inexistente.php';

// verificar melhor como funciona o error handler...sergio

?>