<div class="title">Sessão e Cookies</div>

<?php 

session_start();

print_r($_SESSION);

echo '<br>';

if (!$_SESSION['nome']) { 
    $_SESSION['nome'] = 'Gabriel';
}

if (!$_SESSION['email']) { 
    $_SESSION['email'] = 'gabriel@teste.com';
}

print_r($_SESSION);

?>

<p>
    <a href='../session/basico_sessao_alterar.php'>Alterar Sessão</a>
</p>