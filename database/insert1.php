<div class="title">Inserir Registro #01</div>

<?php


require_once('connection.php');

$sql = "INSERT INTO cadastro (nome, nascimento, email, site, filhos, salario) VALUES ('Mario', '1998-11-21', 'mario@teste.com', 'http://mario.com.br', 11, 14000.22)";
$connection = newConnection();
$result = $connection->query($sql);

if ($result) {
    echo "Dado armazenado no sistema de Banco de dados com sucesso";
} else {
    echo "conexão com erro : " . $connection->error;
}

$connection->close();


?>