<?php
require_once ('bloqueios.php');

$nome = $_POST['nome'];
$quantidade = $_POST['quatidade'];
$tipoProd = $_POST['tipoProd'];
$dataCad = $_POST['dataCad'];
$fornecedor = $_POST['fornecedor'];

$pdo = new PDO('mysql:host=localhost;dbname=foodcontroler;charset=utf8', "root", "");
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$consulta = $pdo->prepare("SELECT idUsu FROM usuario where login = ?");
$consulta->bindParam(1, $_SESSION['login'], PDO::PARAM_STR);

$consulta->execute();
$linha = $consulta->fetch(PDO::FETCH_ASSOC); 
 
$id = $linha['idUsu'];

$pdo = null;

if($id != ""){
$pdo = new PDO('mysql:host=localhost;dbname=foodcontroler;charset=utf8', "root", "");
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$sql = "insert into produtos (nomeProd, quantidade , tipoProd , fornecedor, dataCad, idProdE)  Values(?,?,?,?,?,?)";
$query = $pdo->prepare($sql);
$query->execute(array($nome,$quantidade,$tipoProd,$fornecedor,$dataCad,$id));
$pdo = null;
echo"<script>alert('cadastro realizado!');</script>";
echo "<script>window.location.replace('http://localhost/Food_Controler_26_06/cadastroProdutos.php');</script>";
}
else{
    echo "<script>alert('Erro Impossivel Adicionar o Produto no Momento!');</script>";
    echo "<script>window.location.replace('http://localhost/Food_Controler_26_06/cadastroProdutos.php');</script>";
    die;
}
?>
