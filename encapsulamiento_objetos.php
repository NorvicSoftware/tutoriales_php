<?php

class MiClase{

    public $valor1 = "Publico";
    protected $valor2 = "Protegido";
    private $valor3 = "Privado";

    public function ImprimirValorPublico(){
        echo $this->valor1;
        echo "<br>";
    }

    public function ImprimirValorProtegido(){
        echo $this->valor2;
        echo "<br>";
    }

    public function ImprimirValorPrivado(){
        echo $this->valor3;
        echo "<br>";
    }
}

class MiClase2 extends MiClase{

    public function imprimirValorProtegido2(){
        echo $this->valor2;
        echo "<br>";
    }
}

$valor = new MiClase();

echo $valor->valor1;
echo "<br>";
$valor->ImprimirValorPublico();
echo "<br>";

$valor->ImprimirValorProtegido();
$valor2 = new MiClase2();
$valor2->imprimirValorProtegido2();

echo "<br>";
$valor->ImprimirValorPrivado();