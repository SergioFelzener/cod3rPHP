<div class="title">Métodos Mágicos</div>


<?php 


class Pessoa {

    public $nome;
    public $idade;


    function __construct($nome, $idade) {
        
        echo 'Construtor Invocado! <br>';
        $this->nome = $nome;
        $this->idade = $idade;
        
    }

    function __destruct() {
        echo "Morreu!";
    }

    public function __toString() {
        return "{$this->nome} tem {$this->idade} anos.";  
    }

    public function apresentar() { 
        echo $this . "<br>";
    }

    public function __get($attr){
        echo "Lendo atributo não declarado : {$attr}<br>";
    }

    public function __set($attr, $valor){
        echo "alterando atributo não declarado : {$attr}/{$valor}.";
    }

    public function __call($metodo, $params) { 
        echo "tentando executar metodo ${metodo}.";
        echo ", com parametros : <br>";
        print_r($params);
    }

}

$pessoa = new Pessoa('Sergio', 40);  // __construct()
$pessoa->apresentar();  // chamando o toString

echo $pessoa, '<br>';  // chamando o toString
$pessoa->nome = 'Andre';
$pessoa->apresentar();  // chamando o toString

$pessoa->nomeCompleto = "muito legal<br>"; // chamando __set();
$pessoa->nomeCompleto; // chamando __get();

echo '<br>';
echo $pessoa->nome;  // acessa o atributo diretamente sem o __get().

echo '<br>';
$pessoa->exec(1, 'teste', true, [1, 2, 3]); // acessa o __call(); caso chame uma func\ção / Método que nao existe.

$pessoa = Null; // __destruct();

?>