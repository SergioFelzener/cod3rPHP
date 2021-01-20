<div class="title">Criar Banco de Dados</div>

<?php 

require_once('connection.php');

$connection = newConnection(null);
$sql = 'CREATE DATABASE IF NOT EXISTS curso_php';

$connection->query($sql);

$result = $connection->query($sql);

if ($result) { 
    echo "Sucesso, database criada";
}else { 
    echo "Error : " . $connection->error;
}


$connection->close();


?>