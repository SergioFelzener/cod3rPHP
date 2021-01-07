<div class="title">Traits #1</div>


<?php
trait validacao { 

    public $a = 'Valor A';

    public function validarString($str) { 
        return isset($str) && $str !== ''; 
    }

}

trait validacaoMelhor { 

    public $b = 'Valor B';
    private $c = 'Valor Privado C';

    public function validarStringMelhor($str) { 
        return isset($str) && trim($str);
    }

}

class Usuario {

    //usando as traits
    use validacao, validacaoMelhor;

    public function imprimirValorC() { 
        echo '<br>', $this->c;
    }

}

// var_dump(validacao->validarString(''));


$usuario = new Usuario();
var_dump($usuario->validarString(' '));
echo '<br>';
var_dump($usuario->validarStringMelhor(' '));
echo '<br>';
echo $usuario->a, '<br>', $usuario->b;
echo '<br>';
echo $usuario->imprimirValorC();







?>