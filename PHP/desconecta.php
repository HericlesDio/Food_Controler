<?php
error_reporting(0);
ini_set(“display_errors”, 0 );

session_start();

if($_SERVER['SERVER_NAME'] . $_SERVER['SCRIPT_NAME'] == 'localhost/Food_Controler_26_06/login.php' ||  $_SERVER['SERVER_NAME'] != "localhost"){
unset($_SESSION['logado']);
}
?>
