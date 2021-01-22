<div class="title">Delete PDO</div>

<?php 

require_once('connection_PDO.php');

$connection = newConnection(); 
$sql = "DELETE FROM cadastro WHERE id = :id";
$stmt = $connection->prepare($sql);
$stmt->bindValue(':id', 11);

if ($stmt->execute()) { 
    $result = $stmt->fetch();
    print_r($result);
}else { 
    echo "Erro Cod: " . $stmt->errorCode();
    print_r($stmt->errorInfo());
}

?>