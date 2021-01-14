<?php 
session_start();

print_r($_SESSION);


$_SESSION['email'] = 'gabriel@novo.com';
?>

<p>
    <b>Nome : </b> <?= $_SESSION['nome'] ?><br>
    <b>Nome : </b> <?= $_SESSION['email'] ?>
</p>



<p>
    <a href="session.php">voltar</a>
</p>

<p>
    <a href="basico_sessao_limpar.php">Limpar sessão</a>
</p>