<?php
/*Hacer una página PHP que tenga dos variables y nos indique si la suma de los números es mayor que el producto (resultado de la multiplicación) de ellos o al contrario: */
$numero1=5;
$numero2=5;
$multi=$numero1*$numero2;
$suma=$numero1+$numero2;
if($suma >$multi){
    echo  "la suma es mayor que el producto";
    
}else{
echo "el producto es mayor que la suma";
}
?>