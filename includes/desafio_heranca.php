<div class="title">Desafio Herança (Include x Require)</div>


<?php 

require('usuario.php');

$usuario1 = new Usuario('Andre', 'Andre@Login' );
$usuario1->apresentar();



?>