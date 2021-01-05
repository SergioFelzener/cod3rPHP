<div class="title">Desafio Classe</div>



<?php


// minha resolução 


class Date {

    public int $day = 1;
    public int $month = 1;
    public int $year = 1970;


    public function showDate(){

        return "Data Apresentada <br>{$this->day}/{$this->month}/{$this->year}<br>";
    }
    
}

$date1 = new Date();
echo $date1->showDate();
$date2 = new Date;
$date2->day = 31;
$date2->month = 2;
$date2->year = 2021;
echo $date2->showDate();


// resposta do professor
class Data {

    public $dia = 1;
    public $mes = 1;
    public $ano = 1970;

    public function apresentar() { 

        echo "{$this->dia}/{$this->mes}/{$this->ano}<br>";
    }

}

$aniversario = new Data;
$aniversario->dia = 15;
$aniversario->mes = 8;
$aniversario->ano = 2014;
$aniversario->apresentar() . '<br>';

$casamento = new Data();
$casamento->dia = 22;
$casamento->mes = 10;
$casamento->ano = 2021;
$casamento->apresentar();


?>