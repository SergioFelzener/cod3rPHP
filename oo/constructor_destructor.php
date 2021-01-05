<div class="title">Construtor e Destrutor</div>


<?php 

class Pessoa { 

    public $nome;
    public $idade;

    function __construct($novoNome, $idade = 18) {

        echo 'CONSTRUTOR INVOCADO ! <br>';

        $this->nome = $novoNome;
        $this->idade = $idade;
 
    }

    public function __destruct() {

        echo 'objeto destruido !!'; 
        
    }

    public function apresentar() { 

        echo "{$this->nome}, {$this->idade} anos<br>";

    }

}



//$pessoa = new Pessoa() -> não pode criar uma nova instancia se não passar os parametros do construtor.
$pessoa1 = new Pessoa('Nome Dinâmico', 49);
$pessoa1->apresentar();
unset($pessoa1);
echo "<br>";
$pessoa2 = new Pessoa('Nome Dinâmico', 49);
$pessoa2->apresentar();
$pessoa2 = NULL;










?>