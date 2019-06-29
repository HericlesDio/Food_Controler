<?php
try {
    $pdo = new PDO('mysql:host=localhost;dbname=foodcontroler', "root", "");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $pdo->prepare("SELECT nome,sobrenome,tipousu,nomeProd,quantidade,tipoProd,fornecedor FROM usuario INNER JOIN produtos ON idUsu = idProdE");
    $stmt ->execute();

} catch (PDOException $e) {
    echo $e;
}

$teste = array();
    $i = 0;

while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
    
    $teste[$i] = $row['nome']." ".$row['sobrenome']." ".$row['tipousu']." ".$row['nomeProd'];
    
    $i++;
}

echo $teste[0]."<br>";
echo $teste[1];

?>