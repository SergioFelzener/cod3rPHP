<div class="title">Download PHP</div>

<?php 

session_start();

$NOME_DO_CURSO_PARA_URL = '/cod3rPHP';
$arquivos = $_SESSION['arquivos'] ?? [];

$pastaDeUpload = __DIR__ . '/../files/';
$nomeArquivo = $_FILES['arquivo']['name'];
$arquivo = $pastaDeUpload . $nomeArquivo;
$tmp = $_FILES['arquivo']['tmp_name'];

if(in_array($nomeArquivo, $arquivos, true)) { 
    echo "Arquivo já Existe";
} else if (move_uploaded_file($tmp, $arquivo)) { 
    echo "<br> Arquivo Válido e enviado com sucesso";
    $arquivos[] = $nomeArquivo;
    $_SESSION['arquivos'] = $arquivos;
} else { 
    echo "<br> Erro no upload de arquivo"; 
}

?>

<form action="#" method="POST" enctype="multipart/form-data">
    <input type="file" name="arquivo">
    <button>Enviar</button>
</form>

<ul>
    <?php foreach($arquivos as $arquivo): ?> 
        <li>
            <a href="<?= $NOME_DO_CURSO_PARA_URL . '/files/' . $arquivo ?>">
                <?= $arquivo ?>
            </a>
        </li>
    <?php endforeach ?>
</ul>

<style>
    input, button { 
        font-size: 1.2rem;
    }

</style>

<?php 

// unset($_SESSION['arquivos'] ); // limpando array da sessao 

?>