<?php
class Laptop {
    public $marca;
    public $modelo;
    public $color;
    private $serie;

    function __construct($marca, $modelo, $color, $serie){
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->color = $color;
        $this->serie = $serie;
    }

    public function iterarLaptop(){
        echo "Iterar valores de objeto en clase <br>";
        foreach ($this as $clave => $valor){
            print "$clave => $valor <br>";
        }
    }
}

$laptop = new Laptop('Apple', 'MacBook Pro', 'Blanco', '2131234212');

echo "Iterar valores de objeto fuera de la clase <br>";
foreach ($laptop as $clave => $valor){
    print "$clave => $valor<br>";
}
echo "<br>";

$laptop->iterarLaptop();