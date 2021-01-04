<div class="title">Recursividade</div>

<?php 

function somaUmAte($numero) { 
    $soma = 0;
    for($i = 0; $i <= $numero; $i++) { 
        $soma += $i;
    }
    return $soma; 

}
echo somaUmAte(10) . '<br>';


// fazendo versao recursiva

function somaRecursivaUmAte($numero){

    // condição de parada -> deve ter uma condicao de parada
    if ($numero === 1) { 
        return 1;
    } else {
        return $numero + somaRecursivaUmAte($numero -1);
    }  

}

echo somaRecursivaUmAte(10) . '<br>';

function somaRecursivaEconomica($numero) { 
    return $numero === 1 ? 1 : $numero + somaRecursivaEconomica($numero -1); // com operacao ternaria 
}

echo somaRecursivaEconomica(10) . '<br>';


?>