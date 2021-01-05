<div class="title">Desafio 7 Erros</div>


<?php 


interface Template {
    function metodo1();
    public function metodo2($parametro);
}

abstract class ClassAbstrata implements Template {
    public function metodo3() { 
        echo "estou funcionando";
    }
}

class Classe extends ClassAbstrata { 

    function __construct($parametro) { 

    }
    public function metodo1() { }
    public function metodo2($parametro) { }
}

$exemplo = new Classe('...');
$exemplo->metodo3();






?>