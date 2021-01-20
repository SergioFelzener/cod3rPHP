<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<div class="title">Consultar Registros</div>

<?php

require_once('connection.php');

$sql = "SELECT id, nome, nascimento, email FROM cadastro";

$connection = newConnection();
$result = $connection->query($sql);

$registros = [];

if ($result->num_rows > 0) {
    while ($row = $result->fetch_array()) {
        $registros[] = $row;
    }
} elseif ($connection->error) {
    echo "Error : " . $connetion->error;
}

// print_r($registros);  // imprimindo registros 

$connection->close();

?>

<table class="table">
    <thead>
        <th>ID</th>
        <th>Nome</th>
        <th>E-mail</th>
        <th>Nascimento</th>
    </thead>
    <tbody>
        <?php foreach ($registros as $registro) : ?>
            <tr>
                <td><?= $registro['id'] ?></td>
                <td><?= $registro['nome'] ?></td>
                <td><?= $registro['email'] ?></td>
                <td>
                    <?= date('d/m/Y', strtotime($registro['nascimento'])) ?>
                </td>
            <tr>
            <?php endforeach ?>
    </tbody>
</table>