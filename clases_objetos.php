<?php

class Televisor{
    public $marca;
    public $modelo;
    public $color;
    Public $tamanio;

    function __construct($marca, $modelo, $color, $tamanio){
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->color = $color;
        $this->tamanio = $tamanio;
    }

    public function marcaModelo(){
        return $this->marca . " modelo " . $this->modelo;
    }

    public function calcularAntiguedad(){
        $antiguedad = 0;
        for($i = $this->modelo; $i< date("Y"); $i++){
            $antiguedad++;
        }
        Return "La antiguedad del televisor es: " . $antiguedad;
    }
}

$televisor = new Televisor("Samsung", 2018, "Negro", "42 Pulgadas");

echo $televisor->marcaModelo();
echo "<br>";
echo $televisor->calcularAntiguedad();
echo "<br><br>";

$televisor2 = new Televisor("LG", 1995, "Plomo", "32 Pulgadas");
echo $televisor2->marcaModelo();
echo $televisor2->calcularAntiguedad();