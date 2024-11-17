<?php
function calArea($poligono,$b,$altura=null){
    switch ($poligono) {
        case 'triangulo':
            return ($b*$altura)/2;
            break;
        case 'cuadrado':
            return $b**2;
            break;
        case 'rectangulo':
            return $b*$altura;
            break;
        default:
           return 'no esta bien';
            break;
    }
}

echo "trianguo ",calArea("triangulo",5,6),'<br>'  ;
echo "cuadrado ",calArea("cuadrado",2),'<br>';
echo "rectangulo ",calArea('rectangulo',3,4),'<br>';

?>