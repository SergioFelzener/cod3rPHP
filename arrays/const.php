<div class="title">Arrays Constantes</div>

<?php 

const FRUTAS = ['laranja', 'abacaxi'];
// FRUTAS[0] = 'banana' - PHP NAO DEIXA ALTERAR ARRAY CONST
// FRUTAS[] = 'banana' - PHP NAO DEIXA INCLUIR ARRAY CONST
echo FRUTAS[0];


const CARROS = ["fiat" => "UNO", "Mercedes" => "Benz"];
// CARROS["BMW" => "325i"];
echo '<br>' . CARROS["fiat"];

define('CIDADES', array('Sao Paulo', 'Belo Horizonte'));
//CIDADES[0] = "Recife". // nao se muda array const
echo '<br>' . CIDADES[1];








?>