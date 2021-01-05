<div class="title">Interface</div>

<?php 


//interfface define apenas o metodo publico 
interface Animal {
    function respirar();
}

interface Mamifero {
    function mamar();
}

interface Felino { 
    function correr();
}

interface Canino extends Animal, Mamifero {
    function latir(): string;
}

class Cachorro implements Canino {
    
    function respirar() { 
        return "irei usar oxigênio";
    }

    function latir() : string { 
        return "Au Au";
    }

    function mamar() {
        return 'Bebe Leite';
    }

    function correr(){ 
        return "Rum";
    }

}

$animal1 = new Cachorro();
echo $animal1->respirar(), '<br>';
echo $animal1->latir(), '<br>';
echo $animal1->mamar(), '<br>';
echo $animal1->correr(), '<br>';

echo "<br>";
var_dump($animal1);
echo "<br>";

echo "<br>";
var_dump($animal1 instanceof Cachorro);
echo "<br>";
var_dump($animal1 instanceof Canino);
echo "<br>";
var_dump($animal1 instanceof Animal);
echo "<br>";


echo "FIM !";


?>