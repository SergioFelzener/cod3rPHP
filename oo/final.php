<div class="title">Usando Modificador Final</div>


<?php 



abstract class Abstrata { 
    abstract public function metodo1();

    final public function metodo2() { 
        echo "Não vou mudar<br>"; 
    }
}

class Classe extends Abstrata { 

    public function metodo1() { 
        echo "Executando método 1 <br>";
    }

    // public function metodo2() { 
    //     echo "extendendo método 2 <br>";
    // }

}

$classe = new Classe();  // mesmo assim funciona se comentar nao funciona 
$classe->metodo1();
$classe->metodo2();


final class Unica { 
    public $attr1 = 'Valor Ünico';
}

$unica = new Unica();
echo $unica->attr1;

//nao pode herdar pois é classe final
// class Duplicada extends Unica {
//     public $attr2;
// }




?>


