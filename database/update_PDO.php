<div class="title">Alterar PDO</div>

<?php 

require_once('connection_PDO.php');

$connection = newConnection();

$sql = "UPDATE cadastro SET nome = ?, email = ?, nascimento = ?, site = ?, filhos = ?, salario = ? WHERE id = ?"; 

$stmt = $connection->prepare($sql); 
$result = $stmt->execute([
    'Alterar Cadastro', //nome
    'alterar@teste.com', 
    '1980-10-10',
    'https://alterar@teste.com',
    2,
    12000,
    19
]);

echo "<br>";

if ($result) { 
    echo "registro alterado com sucesso";
} else { 
    echo "Error : " . $stmt->errorCode();
    print_r($stmt->errorInfo());
}





?>