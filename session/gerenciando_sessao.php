<div class="title">Gerenciando Sessão</div>

<?php 

// session_id('d514b5d4f04350717584cd1c4dd59602');
session_start();
echo session_id() .'<br>';

$contador = &$_SESSION['contador'];          // referencia de endereçamento de memória com "&"

$contador = $contador ? $contador + 1 : 1;
echo "<br>";
echo "Contador da sessão : " . $_SESSION['contador'];

if($_SESSION['contador'] % 2 === 0 ) { 
    session_regenerate_id();
}

if($_SESSION['contador'] >= 10 ) { 
    session_destroy();
}


?>

