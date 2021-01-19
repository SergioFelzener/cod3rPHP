<div class="title">Uploads de Arquivo</div>

<?php 

print_r($_FILES);
print_r($_POST);
print_r($_GET);


if ($_FILES && $_FILES['arquivo']) { 
    //salvando no desktop
    $pastaParaSalvar = '/Users/sergiofelzener/Desktop/';
    $nomeArquivo = $_FILES['arquivo']['name'];
    $arquivo = $pastaParaSalvar . $nomeArquivo;
    $diretorioTemporario = $_FILES['arquivo']['tmp_name'];

    // var_dump($diretorioTemporario = $_FILES['arquivo']['tmp_name']);
    if (move_uploaded_file($diretorioTemporario, $arquivo)) { 
        echo "<br>arquivo válido e enviado com sucesso"; 
    } else { 
        echo "<br>Erro no Upload do arquivo"; 
    }

}

?>

<form action="#" method="post" enctype="multipart/form-data"> <!-- ENCTYPE PARA PODER ENVIAR ARQUIVOS -->
    <input type="file" name="arquivo">
    <button>Enviar</button>

</form>

<style>
    input, button { 
        font-size: 1.2rem;
    }

</style>