<?php

raizCuadradaDeUnNumero(9);

function raizCuadradaDeUnNumero($numero){
    $raizCuadrada = sqrt($numero);
    echo "La raiz cuadra de ". $numero . " es: " . $raizCuadrada . "<br>";
}

raizCuadradaDeUnNumero(16);

function tipoDeCambioEnDolaresAmericanos($monto, $moneda){
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
    return $resultado;
}

$totalenUSD = tipoDeCambioEnDolaresAmericanos(100, "Bolivianos BOB");
echo "100 bolivianos es igual a: " . $totalenUSD . " Dolar norteamericano";