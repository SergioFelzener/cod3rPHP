<div class="title">Array Multidimensionais</div>


<?php


$dados = [
    [
        "nome" => "Roberto",
        "idade" => 26,
        "cidade" => "São Paulo"
    ],
    [
        "nome" => "Laiz",
        "idade" => 22,
        "cidade" => "Rio de Janeiro"

    ]
];

print_r($dados);

echo '<br>' . $dados[0]['idade']; // idade roberto
echo '<br>' . $dados[1]['idade']; // idade Laiz
echo "<br>";

$dados[] = [

    "nome" => "Maria",
    "idade" => 33,
    "cidade" => "Mexico"


];

print_r($dados);

echo '<br>' . $dados[2]['idade']; // idade Maria

$dados[2]['vizinho'] = "João";
echo "<br>";
print_r($dados[2]);

unset($dados[1]); // removendo array não é reordenado essa posicao fica NULL

echo "<br>";
print_r($dados);







?>