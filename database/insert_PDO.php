<div class="title">Inserir version PDO</div>

<?php 

require_once('connection_PDO.php');

$sql = "INSERT INTO cadastro 
(nome, email, nascimento, site, filhos, salario)
VALUES (
    'Guilherme pai',
    'guipai@teste.com',
    '1947-7-21',
    'https://site.teste2.com',
    0,
    25007
)";

$connection = newConnection();
echo "<br>";

// print_r(get_class_methods($connection)); // verificando os métodos existentes em $connection

if ($connection->exec($sql)) { 
    $id = $connection->lastInsertId();
    echo "Novo cadastro com id : $id";
} else {
    echo $connection->errorCode() . "<br>";
    print_r($connection->errorInfo());
}

$connection = null;

print_r($connection);





?>