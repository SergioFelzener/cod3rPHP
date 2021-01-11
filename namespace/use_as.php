<?php namespace Outro\Nome; ?>
<div class="title">Use / As</div>


<?php 

    echo __NAMESPACE__ . '<br>';

    include('use_as_arquivo.php');

    function soma($a, $b) { 
        return $a . $b;  // está errado propositalmente para diferencias as funcoes de namespace diferentes.
    }


    class Classe { 
        public $var; 

        function func() { 
            echo __NAMESPACE__ . ' -> ' . __CLASS__ . ' -> ' . __METHOD__ . '<br>';
        }
    }


    echo \Nome\Bem\Grande\constante . '<br>';

    use const Nome\Bem\Grande\constante;
    echo constante . '<br>';

    use Nome\Bem\Grande as ctx;

    echo soma(1,2);
    echo '<br>';

    echo ctx\soma(1, 2);
    echo '<br>';

    // use function Nome\Bem\Grande\soma;
    use function Nome\Bem\Grande\soma as somaReal;

    echo somaReal(1, 3) . '<br>';

    $a = new Classe();
    $a->func();

    $b = new \Nome\Bem\Grande\Classe();
    $b->func();
    





?>