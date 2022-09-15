<?php
/*Definir un número en una variable  y decir a qué nota le corresponde.*/
$nota=20;
if(($nota>=1)&&($nota<=4.9)){
    echo "suspenso";
}elseif(($nota>=5)&&($nota<=5.9)){
    echo "suficiente";
}elseif(($nota>=6)&&($nota<=6.9)){
    echo "bien";
}elseif(($nota>=7)&&($nota<=8.9)){
    echo "muy bien";
}elseif(($nota>=9)&&($nota<=10)){
    echo "sobresaliente";
}else{
    echo "ERROR";
}
?>