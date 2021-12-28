<?php

$cont = 0;

while($cont < 10){
    $cont++;
    echo "Mensaje enviado numero: " . $cont . "<br>";
}

$cont2 = 10;
$suma = 0;
do{
    $suma = $suma + $cont2;
    $cont2++;
}while($cont2 < 10);
echo "La sumatoria es: " . $suma;