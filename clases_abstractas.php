<?php
 abstract class MiClaseAbstracta{
    abstract protected function obtenerValor();
    abstract protected function asignarValor($valor);

    public function imprimirValor(){
        echo $this->obtenerValor();
    }
 }

 class MiClase extends MiClaseAbstracta {
     protected function obtenerValor()
     {
         return "Mensaje de la clase MiClase";
     }

     public function asignarValor($valor)
     {
         return "El valor de la variable es: " . $valor;
     }

 }

 $clase = new MiClase();
 $clase->imprimirValor();
 echo "<br>";
 echo $clase->asignarValor(100);