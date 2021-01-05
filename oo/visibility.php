<div class="title">Visibilidade</div>


<?php 

class A {
    public $publico = 'Público';
    protected $protegido = 'Protegido';
    private $privado = 'Privado';

    public function mostrarA() { 
        $this->naoMostrar();
        // echo '<br>';
        echo "Class A) Público = {$this->publico}<br>";
        echo "Class A) Protegido = {$this->protegido}<br>";
        echo "Class A) Público = {$this->privado}<br>";
    }

    private function naoMostrar() { 
        echo 'Não vou imprimir<br>';
    }

    // protected vai por herança;
    protected function vaiPorHerança() { 
        echo 'Funçao transmitida por Herança<br>';
    }

}

$a = new A();
$a->mostrarA();
// $a->naoMostrar(); // privado nao funciona fora da classe

echo "FIM!";


class B extends A { 
    public function mostrarB() {
        echo "Class B) Público = {$this->publico}<br>";
        echo "Class B) Protegido = {$this->protegido}<br>"; // disponivel na herança
        // echo "Class B) Público = {$this->privado}<br>"; // apenas na classe dona do atributo privado na classe B nao funciona;

        parent::vaiPorHerança(); // aqui funciona a herança da classe
    }
}

echo "<br>";
echo "<hr>";
$b = new B();
$b->mostrarB();

echo "<br>";
echo "<hr>";
$b->mostrarA();
// $b->vaiPorHerança(); // aqui não vai pois a herança da classe somente dentro da classe filha que recebeu a herança


?>