<?php
session_get_cookie_params();
session_start();
 
if($_SESSION['logado'] == "SIM" && time() - $_SESSION['horarioLogin'] <= 240){
/*echo "<script>window.location.replace('http://localhost/Food_Controler_26_06/index.php');</script>";*/

}
else{
    unset($_SESSION['horarioLogin']);
    unset($_SESSION['logado']);
    echo "<script>alert('Usuario Desconectado!')</script>";
    echo "<script>window.location.replace('http://localhost/Food_Controler_26_06/login.php');</script>";
    header("Cache-Control: no-cache, must-revalidate");
    header("Expires: Mon, 26 Jul 1997 05:00:00 GMT"); 
    die;
}

?>