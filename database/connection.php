<?php 

function newConnection($database = 'curso_php') { 
    $server = '127.0.0.1';
    $user = 'root'; 
    $password = '';

    //criando nova instancia do mysqli

    $connection = new mysqli($server, $user, $password, $database);

    if ($connection->connect_error) { 
        // die('Erro : ' . $connection->connect_error);
        echo ('Erro : ' . $connection->connect_error);
        exit();
    }

    return $connection;
}