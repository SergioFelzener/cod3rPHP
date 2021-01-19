<?php 
session_start();

$email = $_POST['email'];
$senha = $_POST['senha'];


if ($_POST['email']) { 
    $usuarios = [
        [
            "nome" => "Aluno Cod3r",
            "email" => "aluno@cod3r.com.br",
            "senha" => "123456"
        ],
        [
            "nome" => "Aluno Cod3r 2",
            "email" => "aluno2@cod3r.com.br",
            "senha" => "123456"
        ],
        [
            "nome" => "Sergio",
            "email" => "sergio@teste.com",
            "senha" => "123456"
        ]
    ];

    foreach($usuarios as $user) { 
        $emailValido = $email === $user['email'];
        $senhaValida = $senha === $user['senha'];

        if($emailValido && $senhaValida) { 
            $_SESSION['erros'] = null;
            $_SESSION['usuario'] = $user['nome'];
            $exp = time() + 60 * 60 * 24 * 30; // daat de expiracao do cookie 
            setcookie('usuario', $user['nome'], $exp);
            header('Location: index.php');
        }
    }

    if (!$_SESSION['usuario']) { 
        $_SESSION['erros'] = ['Credenciais Invalidas'];
    }
}

?>

<!DOCTYPE html>
<html lang="PT-BR">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/login.css">
    <title>Curso PHP Cod3r</title>
</head>

<body class="login">
    <header class="header">
        <h1>Cod3r PHP</h1>
        <h2>Seja Bem Vindo !!</h2>
    </header>
    
    <main class="main">
        <div class="content">
            <h3>Faça o Login</h3>
            <?php if($_SESSION['erros']): ?>
                <div class="errors">
                    <?php foreach($_SESSION['erros'] as $erro): ?>
                        <p><?= $erro ?></p>
                    <?php endforeach ?>
                </div>
            <?php endif ?>
            <form action="#" method="post">
                <div>
                    <label for="email">E-mail</label>
                    <input type="email" name="email" id="email">
                </div>
                <div>
                    <label for="senha">Senha</label>
                    <input type="password" name="senha" id="senha">
                </div>
                <button>Entrar</button>
            </form>
            
        </div>
    </main>
    <footer class="footer">
        COD3R CURSO <?= date('Y'); ?> copyright © Sergio Felzener
    </footer>
</body>

</html>

