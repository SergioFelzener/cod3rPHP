<div class="title">Delete PDO</div>

<?php 

require_once('connection_PDO.php');

$connection = newConnection(); 
$sql = "DELETE FROM cadastro WHERE id = ?"; // se usar no lugar do ? ---> :id descomentar o blindValue
$stmt = $connection->prepare($sql);
// $stmt->bindValue(':id', 11);
// $id = $stmt-> // teste para pegar o id; 

echo "<br>";
if ($stmt->execute([15])) {
    echo "Sucesso excluido id";
    $result = $stmt->fetch();
    print_r($result);
}else { 
    echo "Erro Cod: " . $stmt->errorCode();
    print_r($stmt->errorInfo());
}

?>