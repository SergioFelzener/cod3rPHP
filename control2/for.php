<div class="title">Laço For</div>

<?php 

for ($cont = 1; $cont <= 5; $cont++) { 
    echo "$cont <br>";
}

echo "<br>". "<hr>" ;
for(; $cont <= 10; $cont++) { 
    echo "$cont <br>";
}

echo "<br>". "<hr>" ;

for(; $cont <= 15; ) { 
    echo "$cont <br>";
    $cont++;
}

echo "<br>". "<hr>" ;


$array = [1 => "domingo", "segunda", "terça", "quarta", "quinta", "sexta", "sabado" ]; 

print_r($array);

echo "<br>". "<hr>" ;

for ($i = 1; $i <= count($array); $i++) { 
    echo '<br>' . "$array[$i]" . "<br>"; 
}

$matrix = [
    ['a', 'b', 'c', 'd', 'e'],
    ['f', 'g', 'h', 'i', 'j']
];
echo "<br>". "<hr>" ;

for ($i = 0; $i < count($matrix); $i++ ) { 
    // echo "{$matrix[$i]}<br>"; 
    for($j = 0; $j < count($matrix[$i]); $j++) { 
        echo "{$matrix[$i][$j]}"; 
    }
    echo "<br>";

}
echo "<br>". "<hr>" ;

?>