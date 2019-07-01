<?php
error_reporting(0);
ini_set(“display_errors”, 0 );

try {
    $pdo = new PDO('mysql:host=localhost;dbname=foodcontroler', "root", "");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $pdo->prepare("SELECT DISTINCT nome,sobrenome,login,senha,tipousu FROM usuario");
    $stmt ->execute();


} catch (PDOException $e) {
    echo $e;
}

$usuario = array();
$usuarioSeparados = array();

$i = 0;
$u= 1;

while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){

    $usuario[$i] = $row['nome'].",".$row['sobrenome'].",".$row['login'].",".$row['senha'].",".$row['tipousu'];
    
    
    $usuarioSeparados[$i] = explode(',',$usuario[$i]);

    
$i++;
}
?>