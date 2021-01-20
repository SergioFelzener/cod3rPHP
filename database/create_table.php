<div class="title">Criar Tabela</div>


<?php 

require_once('connection.php');

//DDL - Data Definition Lang. 
$sql = "CREATE TABLE IF NOT EXISTS cadastro (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    nascimento DATE,
    email VARCHAR(100) NOT NULL,
    site VARCHAR(100),
    filhos INT,
    salario FLOAT
)";

$connection = newConnection();
$result = $connection->query($sql);

if ($result) { 
    echo "Sucesso, tabela criada";
}else { 
    echo "Error : " . $connection->error;
}

$connection->close();


?>