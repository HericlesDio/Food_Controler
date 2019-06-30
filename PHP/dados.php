<?php
try {
    $pdo = new PDO('mysql:host=localhost;dbname=foodcontroler', "root", "");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $pdo->prepare("SELECT idProd,nomeProd,quantidade,tipoProd,fornecedor,dataCad FROM usuario INNER JOIN produtos ON idUsu = idProdE");
    $stmt ->execute();

} catch (PDOException $e) {
    echo $e;
}

$produtos = array();
$produtosSeparados = array();

$i = 0;

while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
    
    $produtos[$i] = $row['idProd'].",".$row['nomeProd'].",".$row['quantidade'].",".$row['tipoProd'].",".$row['fornecedor'].",".$row['dataCad'];
    
    $produtosSeparados[$i] = explode(",",$produtos[$i]);

    $i++;
}
?>