<div class="title">Herança</div>


<?php 


class Pessoa { 

    public $nome;
    public $idade;

    function __construct($nome, $idade) { 

        $this->nome = $nome;
        $this->idade = $idade;
        
        echo "Objeto pessoa Criada"; 

    }

    function __destruct() {
        
        echo "Encerrou Objeto Pessoa"; 
    }

    public function apresentar() { 

        // na pratica usar return e colocar echo na chamada do metodo
        echo "{$this->nome}, {$this->idade} anos! <br>"; 

    }


}

class Usuario extends Pessoa { 

    public $login;

    function __construct($nome, $login, $idade = 18 ) {

        $this->nome = $nome;
        $this->idade = $idade;
        $this->login = $login;
        
    }

    function __destruct() {
        
        echo "Encerrou Objeto Usuário <br>";
        parent::__destruct(); 
    }

    public function apresentar() { 

        echo "{$this->login} : "; 
        parent::apresentar();  // chamando metodo da classe pai com mesmo nome heranca de metodo
       
    }
}

$usuario = new Usuario('Sergio', 'sergio_login');
$usuario->apresentar();

unset($usuario);







?>