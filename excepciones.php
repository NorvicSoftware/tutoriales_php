<?php
class Division {
    public function dividirUnNumero($numero){
        try {
            if(!$numero){
                throw new Exception("El número es cero");
            }
            echo "La división es: ". 2/$numero;
            echo "<br>";
        } catch (Exception $e){
            echo "Error de división: " . $e->getMessage();
            echo "<br>";
        } finally {
            return "Bloque try catch finalizado";
        }
    }
}

$numero = new Division();
echo "Ejemplo 1: Cuando el divisor es 4";
echo "<br>";
echo $numero->dividirUnNumero(4);
echo "<br><br>";
echo "Ejemplo 2: Cuando el divisor es 0 ";
echo "<br>";
echo $numero->dividirUnNumero(0);