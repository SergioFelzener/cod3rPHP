<div class="title">Polimorfismo PHP</div>


<?php 


class Comida { 
    public $peso;
}

class Arroz extends Comida { 

}

class ArrozAGrega extends Comida { 

}

class Feijao extends Comida { 
    
}

class Sorvete extends Comida { 
    
}

class Pessoa {
    
   public $peso;

   function __construct($peso) {

    $this->peso = $peso;

   }

   public function comer(Comida $comida) { 

    $this->peso += $comida->peso;

   }   
   
}

$comida1 = new Arroz();
$comida1->peso = 0.58;

$comida2 = new ArrozAGrega();
$comida2->peso = 1;

$comida3 = new Sorvete();
$comida3->peso = 1;


$pessoa1 = new Pessoa(82.92);

$pessoa1->comer($comida1);
$pessoa1->comer($comida2);
$pessoa1->comer($comida3);

echo $pessoa1->peso;








?>