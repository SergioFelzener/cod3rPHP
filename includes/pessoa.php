<?php

class Pessoa { 

    public $nome; 
    public $idade; 

    function __construct($nome, $idade = 18) { 

        $this->nome = $nome;
        $this->idade = $idade; 

        echo "Objeto pessoa criado com sucesso"; 


    }

    function __destruct() {
        
        echo "Encerrou Objeto Pessoa"; 
    }

    public function apresentar() { 

        echo "{$this->nome}, tem {$this->idade} anos.";

    }
    
}