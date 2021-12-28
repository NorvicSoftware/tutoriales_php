<?php

$resultado = function ($numero){
    $raizCuadrada = sqrt($numero);
    echo "La raiz cuadra de ". $numero . " es: " . $raizCuadrada . "<br>";
};

$resultado(9);
$resultado(16);

$MontoEnDolares = function ($monto, $moneda){
    $resultado = 0;
    switch ($moneda){
        case 'Bolivianos BOB':
            $resultado = $monto * 0.14;
            break;
        case 'Peso mexicano MXN':
            $resultado = $monto * 0.48;
            break;
        case 'Peso colombiano COP':
            $resultado = $monto * 0.00026;
            break;
        case 'Sol peruano PEN':
            $resultado = $monto * 0.25;
            break;
        case 'Peso argentino ARS':
            $resultado = $monto * 0.0098;
            break;
        case 'Bolivar venezolano VES':
            $resultado = $monto * 0.000002;
            break;
        case 'Peso chileno':
            $resultado = $monto * 0.0012;
            break;
        case 'Euro EUR':
            $resultado = $monto * 1.13;
            break;
    }
    echo $monto . " " . $moneda . " es igual a: " . $resultado . " Dolar norteamericano <br>";
};

$MontoEnDolares(100, "Bolivianos BOB");
$MontoEnDolares(100, "Peso mexicano MXN");


$cambinarColorHexadecimal = function() use (&$color){
    if($color == "Rojo"){
        $color = "#cb3234";
    }
    if($color == "Amarillo"){
        $color = "#e5be01";
    }
    if($color == "Verde"){
        $color = "#00ff00";
    }
};
$color = "Rojo";
$cambinarColorHexadecimal();
echo $color;
