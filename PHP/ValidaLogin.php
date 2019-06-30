<?php
    session_start();
    $pdo = new PDO('mysql:host=localhost;dbname=foodcontroler;charset=utf8', "root", "");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $consulta = $pdo->prepare("SELECT * FROM usuario where login = ? and senha = ?");
    $consulta->bindParam(1, $_POST['login'], PDO::PARAM_STR);
    $consulta->bindParam(2, $_POST['senha'], PDO::PARAM_STR);

    $consulta->execute();
    $linha = $consulta->fetch(PDO::FETCH_ASSOC); 
 
    $email = $linha['login']; 
    $senha = $linha['senha']; 
    
    $pdo=null;

     if ( $_POST['login'] == $email && $_POST['senha'] == $senha && $email !="" && $senha !="" ){
     $_SESSION['logado'] = 'SIM';
     $_SESSION['horarioLogin'] = time();
     echo "<script>window.location.replace('http://localhost/Food_Controler_26_06/index.php');</script>";
     $_SESSION['login'] = $_POST['login'];
    }
	 
     else{
	 echo "<script>alert('Email ou senha incorreto!')</script>";
     echo "<script>window.location.replace('http://localhost/Food_Controler_26_06/login.php');</script>";
     header("Cache-Control: no-cache, must-revalidate");
     header("Expires: Mon, 26 Jul 1997 05:00:00 GMT"); 
    }
?>     