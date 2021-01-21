<div class="title">Incluir Registro</div>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<?php

if (count($_POST) > 0) {
    
    $dados = $_POST;
    $erros = [];
    if (trim($dados['nome']) === "") {  
        $erros['nome'] = 'Nome é Obrigatório';
    }

    if (isset($dados['nascimento'])) {  
        $data = DateTime::createFromFormat('d/m/Y', $dados['nascimento']);
        if (!$data) {
            $erros['nascimento'] = 'Data deve estar no formato dd/mm/aaaa';
        }
    }

    if (!filter_var($dados['email'], FILTER_VALIDATE_EMAIL)) {
        $erros['email'] = "Email Inválido";
    }

    if (!filter_var($dados['site'], FILTER_VALIDATE_URL)) {
        $erros['site'] = "URL Inválida ! Use http://";
    }

    $filhosConfig = [
        "options" =>
        [
            "min_rannge" => 0,
            "max_range" => 20
        ]
    ];

    if (!filter_var($dados['filhos'], FILTER_VALIDATE_INT, $filhosConfig) && $dados['filhos'] != 0) {
        $erros['filhos'] =  "QUANTIDADE DE FILHOS INVALIDA";
    }

    $salarioConfig = ['option' => ['decimal' => ',']];
    if (!filter_var($dados['salario'], FILTER_VALIDATE_FLOAT, $salarioConfig)) {
        $erros['salario'] = 'Salário inválido use "," para casas decimais';
    }

    //if(!count($erros)) - mesma coisa abaixo 
    if(count($erros) == 0) { 
        require_once('connection.php');
        $sql = "INSERT INTO cadastro
                (nome, email, nascimento, site, filhos, salario)
                VALUES (?, ?, ?, ?, ?, ?)";

        $connection = newConnection();
        $stmt = $connection->prepare($sql);
        $params = [
            $dados['nome'],
            $dados['email'],
            $data ? $data->format('Y-m-d') : null,
            $dados['site'],
            $dados['filhos'],
            $dados['salario']
        ];

        $stmt->bind_param("ssssid", ...$params);

        if($stmt->execute()) { 
            unset($dados);
            echo "Incluido com sucesso";
        } else { 
            echo "Error : " . $connection->error;
        }

    }
}

?>

<!-- <?php foreach ($erros as $erro) : ?> -->
    <!-- <div class="alert alert-danger" role="alert"> -->  <!-- COMENTADO ALERT NO TOPO DA PAGINA - Desenvolvendo alert individual para cada campo !
        <?= "" //$erro ?>
    <!-- </div> -->
<!-- <?php endforeach ?> -->

<div class="container">
    <form action="#" method="POST">
        <div class="form-row">
            <div class="form-group col-md-9">
                <label for="nome">Nome</label>
                <input type="text" class="form-control <?= $erros['nome'] ? 'is-invalid' : '' ?>" id="nome" name="nome" placeholder="Nome" value="<?= $dados['nome'] ?>">
                <div class="invalid-feedback" style="color: red; font-size:0.9rem; margin-left: 4px;">
                    <?= $erros['nome'] ?>
                </div>
            </div>
            <div class="form-group col-md-3">
                <label for="nascimento">Nascimento</label>
                <input type="text" class="form-control <?= $erros['nascimento'] ? 'is-invalid' : '' ?>" id="nascimento" name="nascimento" placeholder="Nascimento" value="<?= $dados['nascimento'] ?>">
                <div class="invalid-feedback" style="color: red; font-size:0.9rem; margin-left: 4px;">
                    <?= $erros['nascimento'] ?>
                </div>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="email">E-mail</label>
                <input type="text" class="form-control <?= $erros['email'] ? 'is-invalid' : '' ?>" id="email" name="email" placeholder="E-mail" value="<?= $dados['email'] ?>">
                <div class="invalid-feedback" style="color: red; font-size:0.9rem; margin-left: 4px;">
                    <?= $erros['email'] ?>
                </div>
            </div>
            <div class="form-group col-md-6">
                <label for="site">Site</label>
                <input type="text" class="form-control <?= $erros['site'] ? 'is-invalid' : '' ?>" id="site" name="site" placeholder="Site" value="<?= $dados['site'] ?>">
                <div class="invalid-feedback" style="color: red; font-size:0.9rem; margin-left: 4px;">
                    <?= $erros['site'] ?>
                </div>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="filhos">Filhos</label>
                <input type="number" class="form-control <?= $erros['filhos'] ? 'is-invalid' : '' ?>" id="filhos" name="filhos" placeholder="Filhos" value="<?= $dados['filhos'] ?>">
                <div class="invalid-feedback" style="color: red; font-size:0.9rem; margin-left: 4px;">
                    <?= $erros['filhos'] ?>
                </div>
            </div>
            <div class="form-group col-md-6">
                <label for="salario">Salário</label>
                <input type="text" class="form-control <?= $erros['salario'] ? 'is-invalid' : '' ?>" id="salario" name="salario" placeholder="Salário" value="<?= $dados['salario'] ?>">
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