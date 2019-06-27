<?php
$nome = $_POST['nome'];
$sobrenome = $_POST['sobrenome'];
$login = $_POST['login'];
$senha = $_POST['senha'];
$TipoUsu = $_POST['TipoUsu'];

$pdo = new PDO('mysql:host=localhost;dbname=foodcontroler;charset=utf8', "root", "");
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$consulta = $pdo->prepare("SELECT * FROM usuario where login = ?");
$consulta->bindParam(1, $_POST['login'], PDO::PARAM_STR);

$consulta->execute();
$linha = $consulta->fetch(PDO::FETCH_ASSOC); 

$email = $linha['login'];

if($email ==""){
$pdo = new PDO('mysql:host=localhost;dbname=foodcontroler;charset=utf8', "root", "");
$sql = "insert into usuario (nome, sobrenome , login , senha, tipousu)  Values(?,?,?,?,?)";
$query = $pdo->prepare($sql);
$query->execute(array($nome,$sobrenome,$login,$senha,$TipoUsu));
$pdo = null;

echo"<script>alert('cadastro realizado!');</script>";
echo "<script>window.location.replace('http://localhost/Food_Controler_26_06/index.php');</script>";
}else{
    echo "<script>alert('Usuario Existente!');</script>";
    echo "<script>window.location.replace('http://localhost/Food_Controler_26_06/index.php');</script>";
}
?>
