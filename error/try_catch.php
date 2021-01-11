<div class="title">Try Catch (Errors)</div>


<?php

// echo 7 / 0 ;

// echo intdiv(7, 0);

try {
    echo intdiv(7, 0);
} catch (Error $e) {
    echo 'Teve um erro aqui <br>';
}

try {
    throw new Exception('Um erro Aconteceu'); // mensagem de erro em $e->getMessage().;
    echo intdiv(7, 0);
} catch (DivisionByZeroError $e) {  // erro especifico 
    echo 'Divisão por "0"<br>';
} catch (Throwable $e) {  // erro genérico
    echo 'Erro encontrado:' . $e->getMessage() . '<br>';
} finally { // sempre é chamado no cod
    echo 'Sempre Executado <br>';
}

echo 'Execução continua .... <br>' ;




?>