<?php
// phpinfo();
?>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<div class="title">Formulário</div>

<h2>Cadastro</h2>
<?php

if (count($_POST) > 0) {
    // if(isset($_POST['nome'])) {  // poderia ter feito assim 
    // }

    $erros = [];
    if (!filter_input(INPUT_POST, "nome")) {  // entra se nao tiver setado 
        $erros['nome'] = 'Nome é Obrigatório';
    }

    if (filter_input(INPUT_POST, "nascimento")) {  // entra aqui se tiver setado
        $data = DateTime::createFromFormat('d/m/Y', $_POST['nascimento']);
        if (!$data) {
            $erros['nascimento'] = 'Data deve estar no formato dd/mm/aaaa';
        }
    }

    if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        $erros['email'] = "Email Inválido";
    }

    if (!filter_var($_POST['site'], FILTER_VALIDATE_URL)) {
        $erros['site'] = "URL Inválida ! Use http://";
    }

    $filhosConfig = [
        "options" =>
        [
            "min_rannge" => 0,
            "max_range" => 20
        ]
    ];

    if (!filter_var($_POST['filhos'], FILTER_VALIDATE_INT, $filhosConfig) && $_POST['filhos'] != 0) {
        $erros['filhos'] =  "QUANTIDADE DE FILHOS INVALIDA";
    }

    $salarioConfig = ['option' => ['decimal' => ',']];
    if (!filter_var($_POST['salario'], FILTER_VALIDATE_FLOAT, $salarioConfig)) {
        $erros['salario'] = 'Salário inválido use "," para casas decimais';
    }
}

?>

<?php foreach ($erros as $erro) : ?>
    <!-- <div class="alert alert-danger" role="alert"> -->  <!-- COMENTADO ALERT NO TOPO DA PAGINA - Desenvolvendo alert individual para cada campo !
        <?= "" //$erro ?>
    <!-- </div> -->
<?php endforeach ?>

<div class="container">
    <form action="#" method="POST">
        <div class="form-row">
            <div class="form-group col-md-9">
                <label for="nome">Nome</label>
                <input type="text" class="form-control <?= $erros['nome'] ? 'is-invalid' : '' ?>" id="nome" name="nome" placeholder="Nome" value="<?= $_POST['nome'] ?>">
                <div class="invalid-feedback" style="color: red; font-size:0.9rem; margin-left: 4px;">
                    <?= $erros['nome'] ?>
                </div>
            </div>
            <div class="form-group col-md-3">
                <label for="nascimento">Nascimento</label>
                <input type="text" class="form-control <?= $erros['nascimento'] ? 'is-invalid' : '' ?>" id="nascimento" name="nascimento" placeholder="Nascimento" value="<?= $_POST['nascimento'] ?>">
                <div class="invalid-feedback" style="color: red; font-size:0.9rem; margin-left: 4px;">
                    <?= $erros['nascimento'] ?>
                </div>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="email">E-mail</label>
                <input type="text" class="form-control <?= $erros['email'] ? 'is-invalid' : '' ?>" id="email" name="email" placeholder="E-mail" value="<?= $_POST['email'] ?>">
                <div class="invalid-feedback" style="color: red; font-size:0.9rem; margin-left: 4px;">
                    <?= $erros['email'] ?>
                </div>
            </div>
            <div class="form-group col-md-6">
                <label for="site">Site</label>
                <input type="text" class="form-control <?= $erros['site'] ? 'is-invalid' : '' ?>" id="site" name="site" placeholder="Site" value="<?= $_POST['site'] ?>">
                <div class="invalid-feedback" style="color: red; font-size:0.9rem; margin-left: 4px;">
                    <?= $erros['site'] ?>
                </div>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="filhos">Filhos</label>
                <input type="number" class="form-control <?= $erros['filhos'] ? 'is-invalid' : '' ?>" id="filhos" name="filhos" placeholder="Filhos" value="<?= $_POST['filhos'] ?>">
                <div class="invalid-feedback" style="color: red; font-size:0.9rem; margin-left: 4px;">
                    <?= $erros['filhos'] ?>
                </div>
            </div>
            <div class="form-group col-md-6">
                <label for="salario">Salário</label>
                <input type="text" class="form-control <?= $erros['salario'] ? 'is-invalid' : '' ?>" id="salario" name="salario" placeholder="Salário" value="<?= $_POST['salario'] ?>">
                <div class="invalid-feedback" style="color: red; font-size:0.9rem; margin-left: 4px;">
                    <?= $erros['salario'] ?>
                </div>
            </div>
        </div>
        <div class="col-lg-12" style="text-align: right;">
            <button class="btn btn-primary btn-lg">Enviar</button>
        </div>

    </form>
</div>


<?php



?>