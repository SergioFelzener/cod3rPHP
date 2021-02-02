<div class="title">Desafio Operadores Lógicos PHP</div>

<!-- 
    João está em casa com sua familia e faz a seguinte afirmação : 
    "Tenho planejado 2 trabalhos um na terça-feira e outro na quinta feira."
    "Caso os 2 trabalhos sejam executados João vai levar a família no shopping,
    "no final de semana, e vai comprar uma tv de 50' e vão tomar sorvete."
    "Caso apenas 1 dos trabalhos seja executado João vai levar a família no shopping,
    "no final de semana, e vai comprar uma tv de 32' e vão tomar sorvete."
    "Caso nenhum trabalho seja executado João fica em casa com a família no final de semana,
    "não compra tv e nao toma sorvete.

    Utilizar um formulário para informar os trabalhos a serem executados ou não.
    Utilizar estruturas de controle com operadores lógicos
    Imprimir resultado na tela 


    (Desenvolvimento)
    Dois Trabalhos -> terça e quinta 
    - Se os dois forem executados -> TV 50'e Sorvete
    - Se os um dos dois forem executados -> TV 32' e Sorvete.
    - Se Nenhum for executado -> fica em casa e não toma sorvete.
    
desafio -->


<form action="#" method="post">
    <div>
        <label for="t1">Trabalho 1 (Terça) : </label>
        <select name="t1" id="t1">
            <option value="1">Executado</option>
            <option value="0">Não Executado</option>
        </select>
    </div>
    <div>
        <label for="t2">Trabalho 2 (Quinta) : </label>
        <select name="t2" id="t2">
            <option value="1">Executado</option>
            <option value="0">Não Executado</option>
        </select>
    </div>
    <button>Executar</button>
</form>

<style>
    button,
    select {
        font-size: 1.8rem;
    }
</style>

<?php

// echo $_POST['t1'];
// echo $_POST['t2'];
$trabalho1 ='';
$trabalho2 ='';

$trabalho1 = $_POST['t1'];
$trabalho2 = $_POST['t2'];

// var_dump(!!$trabalho1);
// var_dump(!!$trabalho2);



if ($trabalho1 === '1' && $trabalho2 === '1') {
    echo "Vamos Passear e comprar a TV de 50', de quebra um sorvetinho";
} else if (!!$trabalho1 == true || !!$trabalho2 == true) {
    echo "Comprar tv 32' e Sorvete";
} else {
    echo "Ficamos em casa";
}


// resposta do professor
if (isset($_POST['t1']) && isset($_POST['t2'])) {
    $t1 = $_POST['t1'] === '1'; // caso seja 1 verdadeiro caso 0 falso
    $t2 = !!$_POST['t2']; // caso seja 1 verdadeiro caso seja 0 falso 
    $tv = '';
    $sorvete = false;

    if ($t1 && $t2) {
        $tv = "50'";
    } else if ($t1 xor $t2) {
        $tv = "32'";
    }

    if ($t1 || $t2) {
        $sorvete = true;
    }

    if ($tv) {
        $resultado = "vamos comprar uma tv de $tv";
    } else {
        $resultado = "sem tv dessa vez";
    }

    $saudavel = !$sorvete;
    if ($saudavel) {
        $resultado .= '<br> Estamos mais Saudável';
    } else {
        $resultado .= 'Sorvete Liberado \o/';
    }

    echo "<p>$resultado</p>";
}





?>