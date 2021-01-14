<?php
session_start();
if (!$_SESSION['usuario']) { 
    header('Location: login.php');
}
?>

<!DOCTYPE html>
<html lang="PT-BR">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/exe.css">
    <title>Exercício</title>
</head>

<body class="exe">
    <header class="header">
        <h1>Cod3r PHP</h1>
        <h2>Visualização do exercício</h2>
    </header>
    <nav class="navbar">
    <span class="usuario">Usuário: <?=$_SESSION['usuario'] ?></span>
        <a href="index.php" class="red">Voltar</a>
        <a href=<?= "{$_GET['dir']}/{$_GET['file']}.php"?> class="green">sem formatação</a>
        <a href="logout.php">Sair</a>
    </nav>
    <main class="main">
        <div class="content">

            <?php

            // varias formas de fazer a mesma consulta via GET .
            // include($_GET['dir'] . "/teste.php");
            // include($_GET['dir'] . "/" . $_GET['file'] . ".php");
            // include("{$_GET['dir']}/{$_GET['file']}.php");
            include(__DIR__ . "/{$_GET['dir']}/{$_GET['file']}.php");

            ?>


        </div>
    </main>
    <footer class="footer">
        COD3R CURSO <?= date('Y'); ?> copyright © Sergio Felzener
    </footer>
</body>

</html>