<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<div class="title">Excluir #2 (Usando prepare)</div>


<?php

require_once('connection.php');

$connection = newConnection();

//caso venha o delete_file no get 
if ($_GET['delete_file']) { 
    $sqlDelete = "DELETE FROM cadastro WHERE id = ?";
    $stmt = $connection->prepare($sqlDelete);
    $stmt->bind_param("i", $_GET['delete_file']);
    $stmt->execute();
}

$sql = "SELECT id, nome, email, nascimento, salario FROM cadastro";
$result = $connection->query($sql);

$registros = [];

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $registros[] = $row;
    }
} elseif ($connection->error) {
    echo "Error : " . $connection->error;
}

$connection->close();


?>


<table class="table table-bordered table-striped table-dark">
    <thead>
        <th>ID</th>
        <th>Nome</th>
        <th>Email</th>
        <th>Nascimento</th>
        <th>Salário</th>
        <th>Açao</th>
    </thead>
    <tbody>
        <?php foreach ($registros as $registro) : ?>
            <tr>
                <td><?= $registro['id'] ?></td>
                <td><?= $registro['nome'] ?></td>
                <td><?= $registro['email'] ?></td>
                <td><?= date('d/m/Y', strtotime($registro['nascimento'])) ?></td>
                <td><?php echo 'R$ ' . $registro['salario'] ?></td>
                <td><a href="exe.php?dir=database&file=delete2&delete_file=<?= $registro['id'] ?>" class="btn btn-sm btn-danger">Deletar</a></td>
            </tr>
        <?php endforeach ?>
    </tbody>


</table>
