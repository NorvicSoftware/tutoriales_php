<?php
echo "Iteracion i <br>";
for ($i = 1; $i <= 100; $i++){
    echo $i . ", ";
}
echo "<br>";
echo "Iteracion j <br>";

for ($j = 1; ; $j++){
    if($j > 10){
        break;
    }
    echo $j . ", ";
}

echo "<br>";
echo "Estructura repetitivas foreach <br>";

$array = array(1, 2, 3, 4, 5);
foreach ($array as &$valor){
    $valor = $valor * 2;
    echo $valor . ", ";
}

echo "<br>";
echo "Iteracion de frutas <br>";
$array2 = array('Naranja', 'Uva', 'Manzana', 'Frutilla');
foreach ($array2 as &$fruta){
    echo $fruta . "<br>";
}