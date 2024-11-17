<?php
function dibujarFigura($tipo, $tamano) {
    if ($tipo === "cuadrado") {

        for ($i = 0; $i < $tamano; $i++) {
            for ($j = 0; $j < $tamano; $j++) {
                echo "* ";
            }
            echo "<br>";
        }
    } elseif ($tipo === "triangulo") {


        for ($i = 1; $i <= $tamano; $i++) {
            for ($j = 0; $j < $i; $j++) {
                echo "* ";
            }
            echo "<br>";
        }
    } else {
        echo "Figura no soportada.<br>";
    }
}

$tamano = 5;

echo "Cuadrado:<br>";
dibujarFigura("cuadrado", $tamano);

echo "<br>";

echo "Triángulo:<br>";
dibujarFigura("triangulo", $tamano);


?>