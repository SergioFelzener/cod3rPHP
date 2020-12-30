<div class="title">Break & Continue</div>



<?php 

$cont = 10; 
//laço infinito
for(;;) {  
    echo "<br>" . $cont; 
    $cont++;
    if($cont >20) { 
        break;
    } 
}

echo "<br> FIM 1˚ parte"; 
echo "<br>";



for(;;) {  
    
    $cont++;
    if($cont % 2 === 1) { 
        continue;
    }
    echo "<br>" . $cont; 

    if($cont >= 30) { 
        break;
    }

}
echo "<br>";

echo "<br> FIM 2˚ parte"; 
echo "<br>";

echo "<br>";
foreach(array(1,2,3,4,5,6) as $valor) { 
    if($valor === 5) break;
    if($valor % 2 ===0) continue;
    echo "$valor <br>";

}






?>