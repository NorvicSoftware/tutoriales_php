<?php
interface Vehiculo {
    public function obtenerTipo();
    public function cantidadRuedas();
}

class Motocicleta implements vehiculo {
    public function obtenerTipo()
    {
        return "Scooter";
    }
    public function cantidadRuedas()
    {
        return 2;
    }
}

$scooter = new Motocicleta();
echo $scooter->obtenerTipo();
echo "<br>";
echo $scooter->cantidadRuedas();

interface A {
    public function metodo1();
}
interface B {
    public function metodo2();
}
interface C extends A, B {
    public function metodo3();
}
class MiClase implements C {
    public function metodo1()
    {
        // TODO: Implement metodo1() method.
    }
    public function metodo2()
    {
        // TODO: Implement metodo2() method.
    }
    public function metodo3()
    {
        // TODO: Implement metodo3() method.
    }
}
