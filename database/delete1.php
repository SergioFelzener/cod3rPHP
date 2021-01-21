<div class="title">Excluir #01</div>


<?php 

require_once('connection.php');


$sql = "DELETE FROM cadastro WHERE id = 1";

$connection = newConnection();
$result = $connection->query($sql);

if($result) { 
    echo "Apagado com Sucesso";
} else { 
    echo "Error: " . $connection->error; 
}

$connection->close(); 

?>