<?php
error_reporting(0);
ini_set(“display_errors”, 0 );

$tempo_carregamento = set_time_limit(120);

$servidor = $_SERVER['SCRIPT_NAME'];

$file = explode('/',$servidor);
$extensao = explode('.',$file[2]);

if($tempo_carregamento > 120 ||  $_SERVER['SCRIPT_NAME'] != "/Food_Controler_26_06/$extensao[0].$extensao[1]"){
    echo "<script>window.location.replace('http://localhost/Food_Controler_26_06/404.php');</script>";
}
?>
