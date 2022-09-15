<?php
/*Definir dos notas en dos variables y calcular si la media es aprobada o suspendida.*/
$nota1=6;
$nota2=5;
$media=($nota1+$nota2)/2;
if($media>=5){
    echo "Aprobada";
}else{
    echo "Suspendida";
}
?>