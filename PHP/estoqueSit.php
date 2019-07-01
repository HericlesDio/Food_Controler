<?php
require_once ("PHP\dadosProd.php");

    $totalEstoque = 8000;

    $resultEstoque = ($quant*100)/$totalEstoque;


if($resultEstoque >= 100){

    $estoque= "Positivo";

}
else if($resultEstoque >= 50){

    $estoque= "Mediano";

}

else if($resultEstoque  >= 20){

    $estoque= "Abaixo da Média";

}
else if($resultEstoque  == 0){

    $estoque= "Vazio";

}
?>
