<?php

class Persona{
    public $nombre;
    public $apellido;
    Public $fechaNacimiento;

    public function setNombreApellido($nombre, $apellido){
        $this->nombre = $nombre;
        $this->apellido = $apellido;
    }

    public function getNombreApellido(){
        return $this->nombre . " " . $this->apellido;
    }

    public function setFechaNacimiento($fechaNacimiento){
        $this->fechaNacimiento = $fechaNacimiento;
    }

    public function getFechaNacimiento(){
        return $this->fechaNacimiento;
    }

    public function obtenerEdad()
    {
        $hoy = date("d-m-Y");
        $fechaUno = date_create($hoy);
        $fechaDos = date_create($this->fechaNacimiento);
        $edad = date_diff($fechaDos, $fechaUno);
        echo $edad->format('%y') . " años";
    }
}

class Alumno extends Persona {
    public $carrera;
    public $matricula;

    public function setCarrera($carrera){
        $this->carrera = $carrera;
    }

    public function getCarrera(){
        return $this->carrera;
    }

    public function notaCarrera($nota){
        echo $nota . " en la carrera de " . $this->carrera;
    }
}

$alumnoUno = new Alumno();
$alumnoUno->setNombreApellido("Daniel", "Merida");
$alumnoUno->setFechaNacimiento("20-05-1995");
$alumnoUno->setCarrera("Programación en PHP");
echo $alumnoUno->getNombreApellido();
echo "<br>";
$alumnoUno->obtenerEdad();
echo "<br>";
$alumnoUno->notaCarrera("95");

