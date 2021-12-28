<?php

$a = 5;
$b = 7;

if($a < $b){
    print("Ejecuta esta parte del código si a es menor que b");
}
echo "<br />";

if($a > $b){
    print("Ejecuta esta parte del código si a es mayor que b");
}
else{
    print("Ejecuta esta parte del código si la condición no se cumple");
}
echo "<br />";

if($a > $b){
    print("Ejecuta esta parte del código si a es mayor que b");
}
elseif($a < $b){
    print("Ejecuta esta parte del código si a es menor que b");
}
else{
    print("Ejecuta esta parte del código si si a es igual que b");
}