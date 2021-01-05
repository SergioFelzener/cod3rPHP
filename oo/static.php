<div class="title">Membros de Classes (Static x Dinamic)</div>


<?php 

class A { 

    public $naoStatic = 'Variável de instancia';
    public static $static = 'Variável de classe (estática)';

    public function mostrarA() { 
        echo "Class A) Não Estatico = {$this->naoStatic}<br>";
        //tentativa 1 
        // echo "Class A) Estática = {$this->static}<br>"; // dessa forma não funciona
        //tentativa 2
        // echo "Estática = {self::$static}<br>"; // assim tb nao funciona 
        echo "Estática = " . self::$static . "<br>";
        
    }
    // a partir de funcao estatica nao acessa o $this
    public static function mostrarEstatica() { 
        // echo "Não Estatico = {$this->naoStatic}<br>"; // nao consigo acessar assim // nao consegue acessar a partir da classe a instancia.
        echo "Estática = " . self::$static . "<br>";
    }

}


$objetoA = new A();
$objetoA->mostrarA();
$objetoA->mostrarEstatica();  // não é a forma ideal 

;echo '<br>';
A::mostrarEstatica();  // forma ideal acessar diretamente pela classe 
echo A::$static, '<br>';

A::$static = 'Alterado membro de classe';
echo A::$static, '<br>';


?>