<?php
/* Define tres variables y ordenar en orden ascendente. Despúes en orden descendente. Guarde como ejercicio04.php*/

$num1=7;
$num2=10;
$num3=30;

if($num1>$num2&&$num2>$num3){
    if($num2>$num3)
        echo $num1." > ".$num2." > ".$num3;
    else 
        echo $num1." > ".$num3." > ".$num2;
}elseif($num2>$num3&&$num3>$num1){
    if($num3>$num1)
        echo $num2." > ".$num3." > ".$num1;
    else 
        echo $num2." > ".$num1." > ".$num3;
}else 
    if($num1>$num2)
        echo $num3." > ".$num1." > ".$num2;
    else 
        echo $num3." > ".$num2." > ".$num1;
    
        
        if($num1<$num2&&$num2<$num3){
            if($num2<$num3)
                echo $num1." < ".$num2." < ".$num3;
                else
                    echo $num1." < ".$num3." < ".$num2;
        }elseif($num2<$num3&&$num3<$num1){
            if($num3<$num1)
                echo $num2." < ".$num3." < ".$num1;
                else
                    echo $num2." < ".$num1." < ".$num3;
        }else
            if($num1>$num2)
                echo $num3." < ".$num1." < ".$num2;
                else
                    echo $num3." < ".$num2." < ".$num1;
                    

?>