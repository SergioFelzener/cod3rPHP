<div class="title">Primeira Classe</div>


<?php 

class Cliente { 

    //atributos

    public $nome = 'Anônimo';
    public $idade = 18;


    public function apresentar() { 

        return "Nome : {$this->nome}<br> Idade : {$this->idade}<br>";
    
    }

}

$cliente1 = new Cliente();
$cliente1->nome = "Antonio";
$cliente1->idade = 22;
echo $cliente1->apresentar() .'<br>';

$cliente2 = new Cliente;
$cliente2->nome = "Sergio";
$cliente2->idade = 43;

echo $cliente2->apresentar();






?>

