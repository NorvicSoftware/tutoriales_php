<?php

class Libro {
    public function titulo($nombre){
        echo "Libro: ".  $nombre;
    }
}

trait LibrosBiograficos {
    public function descripcionBiografica(){
        echo "Contienen aspectos en los que se narra la vida de una persona";
    }
}

trait LibrosTecnicos {
    public function descripcionTecnica(){
        echo "Documentos que analiza un tema concreto";
    }
}

trait LibrosReligiosos {
    public function descripcionReligiosa(){
        echo "Diseñados para sustentar una religión";
    }
}

class Lector extends Libro {
    use LibrosBiograficos;
    public function formato($formato){
        echo "Formato: " . $formato;
    }
}

$libro = new Lector();
$libro->titulo("Steve Jobs");
echo "<br>";
$libro->descripcionBiografica();
echo "<br>";
$libro->formato("Electronico");