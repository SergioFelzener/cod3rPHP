<?php 

require_once('pessoa.php');

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




?>