<?php
/*Diseñar un programa que determine la cantidad total a pagar por una llamada telefónica de acuerdo a las siguientes premisas:
Toda llamada que dure menos de 3 minutos tiene un coste de 10 céntimos.
Cada minuto adicional a partir de los 3 primeros es un paso de contador y cuesta 5 céntimos.
*/
$duracion=5;
if($duracion<=3){
    echo "El coste es de 10 centimos";
}else{
  echo"el coste es de: ".(10+($duracion-3)*5);
    }