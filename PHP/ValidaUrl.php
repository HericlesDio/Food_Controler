<?php

$tempo_carregamento = set_time_limit();

if($tempo_carregamento > 480 ){
    echo "<script>window.location.replace('http://localhost/Food_Controler_26_06/404.php');</script>";
}
?>
