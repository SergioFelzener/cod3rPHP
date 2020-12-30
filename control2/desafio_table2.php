<div class="title">Desafio Tabela 2</div>

<form action="#" method="post">
    <div>
        <label for="linhas">Linhas</label>
        <input type="number" value="<?php $_POST['linhas'] ?? 10 ?>" name="linhas" id="linhas">
    </div>
    <div>
        <label for="colunas">Colunas</label>
        <input type="number" value="<?php $_POST['colunas'] ?? 10 ?>" name="colunas" id="colunas">
    </div>
    <div>
        <button>Criar Tabela</button>
    </div>
</form>

<style>
    form>* {
        font-size: 1.8rem;
    }

    form>button {
        border-radius: 10px;
        box-shadow: black 10px;
    }

    table {
        border: 1px solid #444;
        border-collapse: collapse;
        margin: 20px 0px;
    }

    table tr {
        border: 1px solid #444;
    }

    table td {
        padding: 10px 20px;
    }
</style>
<table>
    <?php

    // var_dump(intval($_POST['linhas']));
    // var_dump(intval($_POST['colunas']));

if(isset($_POST['linhas']) &&  isset($_POST['colunas'])) {
    $linhas = intval($_POST['linhas']);
    $colunas = intval($_POST['colunas']);


    if (!$linhas) $linhas = 10;
    if (!$colunas) $colunas = 10;

    $num = 1;
    for ($i = 0; $i < $linhas; $i++) {
        echo "<tr>";
        for ($j = 0; $j < $colunas; $j++) {
            echo "<td>$num</td>";
            $num++;
        }
        echo "</tr>";
    }
}



    ?>
</table>