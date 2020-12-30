<div class="title">Foreach</div>


<?php 

$array = [1 => "domingo", "segunda", "terça", "quarta", "quinta", "sexta", "sabado" ]; 

foreach($array as $valor) { 
    echo "{$valor}" . '<br>';
}

echo '<br>' . '<hr>'; 

foreach($array as $indice => $valor) { 
    echo "$indice => {$valor}" . '<br>';
}

$matrix = [
    ['a', 'b', 'c', 'd', 'e'],
    ['f', 'g', 'h', 'i', 'j']
];

foreach($matrix as $linha) { 
    // echo "$linha <br>";
    foreach($linha as $letra) { 
        echo "$letra <br>";
    } 
    echo "<br>";
}

$numeros = [1, 2, 3, 4, 5, 6, 7, 8];

foreach($numeros as &$dobrar) { 
    $dobrar *= 2; 
    echo "$dobrar <br>";

}
print_r($numeros); 




?>