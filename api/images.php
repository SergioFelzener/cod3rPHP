<div class="title">Imagens</div>

<?php 

session_start();

$NOME_DO_CURSO_PARA_URL = '/cod3rPHP';
$TIPO_IMAGEM = '.jpg';
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
        <?php if(strpos($arquivo, $TIPO_IMAGEM) > 0): ?>
            <li style="list-style:none;">
                <img src="<?= $NOME_DO_CURSO_PARA_URL . '/files/' . $arquivo ?>" height="120" />
                    <!-- <?= $arquivo ?> -->
            </li>
        <?php endif ?>
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