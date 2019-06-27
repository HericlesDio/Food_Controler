<?php

$tempo_carregamento = mktime();

if($tempo_carregamento >= 240 || $_SERVER['HTTP_REFERER'] != $_SERVER['SCRIPT_NAME']){
    echo "<script>window.location.replace('http://localhost/Food_Controler_26_06/404.php');</script>";
}
?>
