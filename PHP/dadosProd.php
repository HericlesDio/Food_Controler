<?php
error_reporting(0);
ini_set(“display_errors”, 0 );


$pdo = new PDO('mysql:host=localhost;dbname=foodcontroler;charset=utf8', "root", "");
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$consulta = $pdo->prepare("SELECT idUsu,nome FROM usuario where login = ?");
$consulta->bindParam(1, $_SESSION['login'], PDO::PARAM_STR);

$consulta->execute();
$linha = $consulta->fetch(PDO::FETCH_ASSOC); 
 
$id = $linha['idUsu'];
$nome = $linha['nome'];

$pdo = null;



try {
    $pdo = new PDO('mysql:host=localhost;dbname=foodcontroler', "root", "");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $pdo->prepare("SELECT DISTINCT idProd,nomeProd,quantidade,tipoProd,fornecedor,dataCad FROM produtos INNER JOIN usuario ON idProdE = ?");
    $stmt->bindParam(1, $id, PDO::PARAM_STR);
    $stmt ->execute();
    $pdo = null;


} catch (PDOException $e) {
    echo $e;
}

$produtos = array();
$produtosSeparados = array();

$i = 0;
$u= 1;

$quant = 0;

while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){

    $produtos[$i] = $row['idProd'].",".$row['nomeProd'].",".$row['quantidade'].",".$row['tipoProd'].",".$row['fornecedor'].",".$row['dataCad'];
    
    $produtosSeparados[$i] = explode(',',$produtos[$i]);

    $quant = $quant + $produtosSeparados[$i][2];
$i++;
}

?>