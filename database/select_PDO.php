<div class="title">Consultar no Banco PDO </div>

<?php 

require_once('connection_PDO.php');


$connection = newConnection();
echo '<br>';
$sql = "SELECT * FROM cadastro";
// $result = $connection->query($sql)->fetchAll(PDO::FETCH_NUM); // apenas numeros(indice)
$result = $connection->query($sql)->fetchAll(PDO::FETCH_ASSOC); // Array Associativo
// $result = $connection->query($sql)->fetchAll(PDO::FETCH_CLASS); // Array class formato (acessa como objeto)
// $result = $connection->query($sql)->fetchAll(PDO::FETCH_BOTH); //AMBAS

print_r($result);

echo "<hr>";
//duas formas de fazer com LIMIT e OFFSET
// $sql = "SELECT * FROM cadastro LIMIT ? OFFSET ?"; // OFFSET - deslocamento a partir dessa linha pega no banco de dados offset 500 começa da linha 500
$sql = "SELECT * FROM cadastro LIMIT :qtde OFFSET :inicio";

$stmt = $connection->prepare($sql);
$stmt->bindValue(':qtde', 2, PDO::PARAM_INT); //se nao passar PDO::PARAM_INT vai passar como STRING 
$stmt->bindValue(':inicio', 3, PDO::PARAM_INT);

// print_r(get_class_methods($stmt)); // verificando methods dento de $stmt


if ($stmt->execute()) { 
    $result = $stmt->fetchAll();
    print_r($result);
} else { 
    echo "Código : " . $stmt->errorCode() . "<br>"; // caso tenha algum erro exibir na tela com o print_R
    print_r($stmt->errorInfo());
}

echo "<br>";
echo "<hr>";

//proximo exemplo


$sql = "SELECT * FROM cadastro WHERE id = :id";  // passando parametro no execute usar "?" como param do id.
$stmt = $connection->prepare($sql);
// $stmt->bindValue(':id', 1); // aqui nao ha necessidade do , PDO::PARAM_INT
// if($stmt->execute()){ // usar bindValue e passar paramentro e em seguida execute sem parametros pois esta [passando no bindValue]
// if($stmt->execute([1])){
if($stmt->execute([':id' => 1])){ // resolvendo dentro do execute os parametro da consulta 
    $result = $stmt->fetch(); // buscando apenas um registro buscando todos usar fechAll()
    print_r($result);
}else { 
    echo "Error cod :" . $stmt->errorCode();
    print_r($stmt->errorInfo());
}

echo "<br>"; 
echo "<hr>"; 
print_r(get_class_methods($connection));


echo "<br> FIM!!";
$connection = null; 
echo "<br> FIM APOS!!";

print_r(get_class_methods($connection));
?>